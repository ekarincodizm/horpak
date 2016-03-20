/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Global Varliable
 */
$(document).ready(function () {
    customDatatable();
    customValidation();
    crud();
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
    $('.jconfirm-box').parent().prepend($('<div class="six wide column"></div>'));
    $('.jconfirm-box').parent().addClass('grid').addClass('ui');
    $('.jconfirm-box').addClass('four').addClass('wide').addClass('column');
}

function customDatatable() {
    $('.table').DataTable();
}

function customValidation() {
    $('form.validate').submit(function (e) {
        e.preventDefault();
    }).validate({
        submitHandler: function (form) {
            //console.log(form);
            form.submit();
        }
    });
}

function toastMessage(title, contentMessage, btnMessage) {
    $.alert({
        title: title,
        content: contentMessage,
        confirmButton: btnMessage,
        confirmButtonClass: 'ui button orange',
        confirmIcon: true,
        confirmIconClass: 'fa fa-ok',
    });
    reDesignElement();
}

function crud() {
    var formSeletor = '.ui.form.horpak';
    $(document).on('click', '.btn-form', function () { // 
        var element = this;
        var id = $(element).attr('data-id');
        var url = $(formSeletor).attr('data-url');
        if (url === undefined) {
            alert('ใส่  attribute data-url ใน form ระบุ url ที่ไป get data ด้วย');
            return;
        } else {
            if (id !== undefined) {
                $.get(url, {id: id}, function (resp) {
                    $.each(resp, function (key, value) {
                        $('.ui.form.horpak').find("input[name='" + key + "']").val(value);
                        $('.ui.form.horpak').find("select[name='" + key + "']").val(value);
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
                $('.ui.form.horpak').find("input[type=text], textarea").val("");
                $('.ui.form.horpak').find("select").val("");
                $('.ui.form.horpak').find('input[type="checkbox"]').attr('checked', false);
                $('.ui.form.horpak').find('input[type="radio"]').attr('checked', true);
            }
            checkHiddenFieldError(formSeletor);
        }

        $('.ui.modal').modal({
            closable: false,
            onDeny: function () {
                return false;
            },
            onApprove: function () {
                //this.modal('hide');
            }
        }).modal('show');
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
            columnClass: 'ui grid',
            closeIcon: true,
            closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
            confirm: function () {
                window.location.href = restUrlDelete;// "<?= site_url('Backend/DeleteConfig') ?>" + "/" + codeId;
            },
            cancel: function () {
                //$.alert('Canceled!')
            }
        });
        reDesignElement();
    }).on('click', '.ui.green.submit.button', function () {
        $.confirm({
            icon: 'fa fa-warning',
            title: 'ท่านกำลังจะบันทึกข้อมูล',
            content: 'ยืนยันการบันทึกข้อมูล',
            confirmButton: 'ใช่ บันทึก',
            cancelButton: 'ไม่ใช่ ยกเลิก',
            confirmButtonClass: 'ui button green',
            cancelButtonClass: 'ui button red',
            columnClass: 'ui grid',
            closeIcon: true,
            closeIconClass: 'fa fa-close', // or 'glyphicon glyphicon-remove'
            confirm: function () {
                $(formSeletor).submit();
            },
            cancel: function () {
                //$.alert('Canceled!')
            }
        });
        reDesignElement();
    });
}

function checkHiddenFieldError(formSeletor) {
    var inputSeletors = $(formSeletor).find('input,select,textarea');
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
}
