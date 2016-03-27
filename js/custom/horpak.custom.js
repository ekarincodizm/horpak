/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Global Varliable
 */
var FormValidate = {};
var TransitionMotion = [
    'slide up', 'slide down', 'scale', 'fade down',
    'fade up', 'fade', 'vertical flip', 'horizontal flip',
    'bounce', 'tada', 'pulse', 'flash', 'shake']
var FormSeletor = '.ui.form.horpak';

$(document).ready(function () {
    customNavbarMenu();
    customDatatable();
    customValidation();
    crud();

    //customAjaxProcess();
});

/*
 * ***************************Jquery Plugin Default*****************************
 */
$.extend(true, $.fn.dataTable.defaults, {
    "language": {
        "sProcessing": "กำลังดำเนินการ...",
        "sLengthMenu": "แสดง_MENU_ แถว",
        "sZeroRecords": "ไม่พบข้อมูล",
        "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
        "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
        "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
        "sInfoPostFix": "",
        "sSearch": "ค้นหา:",
        "sUrl": "",
        "oPaginate": {
            "sFirst": "เิริ่มต้น",
            "sPrevious": "ก่อนหน้า",
            "sNext": "ถัดไป",
            "sLast": "สุดท้าย"
        }
    }
});

/*
 * @param {type} param
 * http://www.mitrahsoft.com/index.cfm/blog/jQuery-validation-error-placement-for-Semantic-UI
 */
$.validator.setDefaults({
    errorClass: 'errorField',
    errorElement: 'div',
    errorPlacement: function (error, element) {
        error.addClass("ui red pointing above ui label error").appendTo(element.closest('div.field'));
    },
    highlight: function (element, errorClass, validClass) {
        $(element).closest("div.field").addClass("error").removeClass("success");
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).closest(".error").removeClass("error").addClass("success");
    }
});

/*
 * ***************************Jquery Plugin Default*****************************
 */

function reDesignElement() {
    //$('.jconfirm-box-container').addClass('center').addClass('aligned'); //.addClass('container')
}

function customDatatable() {
    $('.table').DataTable();
}

function customNavbarMenu() {
    /*$(document).on("click", '.right.menu.open', function (e) {
     e.preventDefault();
     $(this).addClass('close').removeClass('open');
     $('.ui.vertical.navbar.menu').css('display', 'inline');
     }).on("click", '.right.menu.close', function (e) {
     e.preventDefault();
     $(this).addClass('open').removeClass('close');
     $('.ui.vertical.navbar.menu').css('display', 'none');
     });*/
    $(document).on("click", '.left.menu.open', function (e) {
        e.preventDefault();
        $('.left.demo.sidebar').sidebar('toggle');
    });
    $('.ui.dropdown').dropdown();
}

function customValidation() {
    FormValidate = $('form.validate').submit(function (e) {
        e.preventDefault();
    }).validate({submitHandler: function (form) {
            $.confirm({
                icon: 'fa fa-warning',
                title: 'ท่านกำลังจะบันทึกข้อมูล',
                content: 'ยืนยันการบันทึกข้อมูล',
                confirmButton: 'ใช่ บันทึก',
                cancelButton: 'ไม่ใช่ ยกเลิก',
                confirmButtonClass: 'ui button green',
                cancelButtonClass: 'ui button red',
                columnClass: 'ui grid center aligned',
                closeIcon: true,
                closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
                confirm: function () {
                    $.ajax({
                        url: $(FormSeletor).attr('action'),
                        data: $(FormSeletor).serialize(),
                        dataType: 'json',
                        type: 'post',
                        success: function (resp) {
                            console.log(resp);
                            if (resp.status) {
                                window.location.href = resp.url;
                            }
                        },
                        error: function (err, xhrr, http) {
                            toastMessageError({title: 'Application Error', message: err.responseText});
                        }
                    })
                },
            });
            reDesignElement();
        }
    });
}

function toastMessageError(resp) {
    $.alert({
        icon: 'fa fa-remove',
        title: resp.title,
        content: resp.message,
        confirmButton: 'ปิด',
        confirmButtonClass: 'ui button orange',
        confirmIcon: true,
        confirmIconClass: 'fa fa-ok',
        columnClass: 'ui container left aligned',
    });
    reDesignElement();
}

function toastMessageInfo(resp) {
    $.alert({
        icon: 'fa fa-info',
        title: resp.title,
        content: resp.message,
        confirmButton: 'ตกลง',
        confirmButtonClass: 'ui button blue',
        confirmIcon: true,
        confirmIconClass: 'fa fa-ok',
        columnClass: 'ui container left aligned',
    });
    reDesignElement();
}

function crud() {
    $(document).on('click', '.btn-form', function () { // 
        var element = this;
        var id = $(element).attr('data-id');
        var url = $(FormSeletor).attr('data-url');
        if (url === undefined) {
            alert('ใส่  attribute data-url ใน form ระบุ url ที่ไป get data ด้วย');
            return;
        } else {
            if (id !== undefined) {
                $.get(url, {id: id}, function (resp) {
                    $.each(resp, function (key, value) {
                        $('.ui.form.horpak').find("input[name='" + key + "']").val(value);
                        $('.ui.form.horpak').find("select[name='" + key + "']").val(value);
                        $('.ui.form.horpak').find("textarea[name='" + key + "']").val(value);
                        var checkbox = $('.ui.form.horpak').find('input[type="checkbox"][name="' + key + '"]');
                        if ($(checkbox).val() == value) {
                            $(checkbox).attr('checked', true);
                        }
                        var radio = $('.ui.form.horpak').find('input[type="radio"][name="' + key + '"]');
                        if ($(radio).val() == value) {
                            $(checkbox).attr('checked', true);
                        }
                    });
                }, 'json');
            } else {
                //alert('แน่ใจว่าใส่  attribute data-id คือ id ที่จะลบ ใน ปุ่มคลิกลบแล้วใช่ไหม');
                $('.ui.form.horpak').find("input,textarea").val("");
                $('.ui.form.horpak').find("select").val("");
                $('.ui.form.horpak').find('input[type="checkbox"]').attr('checked', false);
                $('.ui.form.horpak').find('input[type="radio"]').attr('checked', true);
            }
            resetFormBlank(FormSeletor);
        }

        $('.ui.modal').modal({closable: false}).modal('setting', 'transition', TransitionMotion[1]).modal('show');
    }).on('click', '.btn-delete', function () {
        var element = this;
        var restUrlDelete = $(element).attr('data-url');
        if (restUrlDelete === undefined) {
            alert('ใส่  attribute data-url ใน ปุ่ม ระบุ url  ด้วย');
            return;
        }
        $.confirm({
            icon: 'fa fa-warning',
            title: 'ท่านกำลังจะลบข้อมูล',
            content: 'ยืนยันการลบ!',
            confirmButton: 'ใช่ ฉันจะลบมัน',
            cancelButton: 'ไม่ใช่ ฉันกดผิด',
            confirmButtonClass: 'ui button green',
            cancelButtonClass: 'ui button red',
            columnClass: 'ui grid center aligned',
            closeIcon: true,
            closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
            confirm: function () {
                $.ajax({
                    url: restUrlDelete,
                    data: $(FormSeletor).serialize(),
                    dataType: 'json',
                    type: 'post',
                    success: function (resp) {
                        if (resp.status) {
                            window.location.href = resp.url;
                        } else {
                            toastMessageError(resp);
                        }
                    },
                    error: function (err, xhrr, http) {
                        console.log(err);
                        toastMessageError({title: 'StatusCode : ' + err.status + ' ' + err.statusText, message: err.responseText});
                    }
                });
            },
        });
        reDesignElement();
    }).on('click', '.ui.green.submit.button', function () {

    });
}

function resetFormBlank(FormSeletor) {
    setTimeout(function () {
        var inputSeletors = $(FormSeletor).find('input,select,textarea');
        $.each(inputSeletors, function (index, input) {
            var value = $(input).val();
            //console.log('value ::==' + value);
            if (value !== '') {
                $(input).parent().removeClass("error");
                $(input).parent().removeClass("error");
                $(input).parent().find('.errorField.ui.red').empty();
            } else {
                $(input).parent().addClass("error");
                $(input).parent().addClass("error");
            }
        });
    }, 200);
    FormValidate.resetForm();
}

function customAjaxProcess() {
    var htmlLoading = '<div class="ui segment">';
    htmlLoading += '  <div class="ui active inverted dimmer">';
    htmlLoading += '  <div class="ui large text loader">Loading</div>';
    htmlLoading += '  </div>';
    htmlLoading += '  <p></p>';
    htmlLoading += '  <p></p>';
    htmlLoading += '  <p></p>';
    htmlLoading += '  </div>';
    $(document).append(htmlLoading);
    $(document).ajaxStart(function () {
        $(htmlLoading).show();
    });
    $(document).ajaxStop(function () {
        $(htmlLoading).hide();
    });
}

