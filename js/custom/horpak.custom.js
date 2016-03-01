/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    defaultValidate();
});

function defaultValidate() {
    $.validator.setDefaults({
        highlight: function (element) {
            $(element).parent('.input-field').children('span').css({'font-weight': 'bold', 'color': 'red'})
        },
        unhighlight: function (element) {
            $(element).parent('.input-field').children('span').css({'color': 'red'});
        },
        errorElement: 'span',
        errorClass: 'validate',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
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
