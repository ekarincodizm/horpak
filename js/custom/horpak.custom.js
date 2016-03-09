/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Global Varliable
 */
$(document).ready(function () {
    //customDatatable();
    defaultValidate();
});

//$.extend(true, $.fn.dataTable.defaults, {
//    "language": {
//        "sProcessing": "กำลังดำเนินการ...",
//        "sLengthMenu": "แสดง_MENU_ แถว",
//        "sZeroRecords": "ไม่พบข้อมูล",
//        "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
//        "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
//        "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
//        "sInfoPostFix": "",
//        "sSearch": "ค้นหา:",
//        "sUrl": "",
//        "oPaginate": {
//            "sFirst": "เิริ่มต้น",
//            "sPrevious": "ก่อนหน้า",
//            "sNext": "ถัดไป",
//            "sLast": "สุดท้าย"
//        }
//    }
//});
//function customDatatable() {
//    $('.table').DataTable();
//}


function defaultValidate() {
    $.validator.setDefaults({
        highlight: function (element) {
            $(element).parent('.input-field').children('span').css({'font-weight': 'bold', 'color': 'red'})
        },
        unhighlight: function (element) {
            $(element).parent('.input-field').children('span').css({'color': 'red'});
        },
        errorElement: 'input',
        errorClass: 'error',
        errorPlacement: function (error, element) {
            $(element).parent().css({'border': '1px solid red'});
        },
        success: function (error, element) {
            $(element).parent().css({'border': ''});
        },
    });
    $('form.validate').submit(function (e) {
        e.preventDefault();
    }).validate({
        submitHandler: function (form) {
            console.log(form);
            form.submit();
        }
    });
}
function deleteConfig(restUrlDelete) {
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
}
