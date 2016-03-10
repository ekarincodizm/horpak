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

function customDatatable() {
    $('.table').DataTable();
}

function customValidation() {
    $('form.validate').submit(function (e) {
        e.preventDefault();
    }).validate({
        submitHandler: function (form) {
            console.log(form);
            form.submit();
        }
    });
}
function crud() {
    $(document).on('click', '.btn-form', function () { // 
        var element = this;
        var id = $(element).attr('data-id');
        var url = $('.ui.form').attr('data-url');
        console.log('id ::==' + id);
        console.log('url ::==' + url);
        if (url === undefined) {
            alert('ใส่  attribute data-url ใน form ระบุ url ที่ไป get data ด้วย');
            return;
        } else {
            if (id !== undefined) {
                $.get(url, {id: id}, function (resp) {
                    $.each(resp, function (key, value) {
                        $('.ui.form').find("input[name='" + key + "']").val(value);
                    });
                }, 'json');
            } else {
                //alert('แน่ใจว่าใส่  attribute data-id คือ id ที่จะลบ ใน ปุ่มคลิกลบแล้วใช่ไหม');
                $('.ui.form').find("input[type=text], textarea").val("");
            }
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
        $('.jconfirm-box').parent().prepend($('<div class="six wide column"></div>'));
        $('.jconfirm-box').parent().addClass('grid').addClass('ui');
    });
}
