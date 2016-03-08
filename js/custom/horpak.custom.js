/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    //customDatatable();
    defaultValidate();
    handleDelete();
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

function handleDelete() {
    /*
     * referrence http://craftpip.github.io/jquery-confirm/
     */
    var element = {};
    $(window.document).on('click', 'button.confirm,a.confirm', function () {
        element = this;
        var message = ($(element).attr("data-message") != undefined ? $(element).attr("data-message") : "ยืนยนัการลบ");
        $.confirm({
            title: 'Confirm!',
            content: message,
            confirmButton: 'Okay',
            cancelButton: 'Close',
            confirmButtonClass: 'btn light-green accent-4',
            cancelButtonClass: 'btn red darken-3',
            confirm: function () {
                var id = $(element).attr("data-id");
                var url = $(element).attr("data-url");
                $.post(url, {id: id}, function (resp) {
                    console.log(resp);
                    if (resp.status) {
                        window.location.reload(true);
                    }
                }, 'json');
            },
            cancel: function () {

            },
            icon: 'fa fa-warning',
            columnClass: 'col l4 offset-l4'
        });
    })

}
