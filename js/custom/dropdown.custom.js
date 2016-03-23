/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('.right.menu.open').on("click", function (e) {
        e.preventDefault();
        $('.ui.vertical.menu').toggle();
    });

    //$('.ui.dropdown').dropdown();
});

function setDinamicOptions(selector, options) {
    var att = "data-dinamic-opt";
    $(selector).find('[' + att + ']').remove();
    var html = $(selector + ' .menu').html();
    $.each(options, function (index, object) {
        html += '<div class="item" data-value="' + object.value + '" ' + att + '>' + object.name + '</div>';
    });
    $(selector + ' .menu').html(html);
    $(selector).dropdown();
}
function setDropdownOptions(selector, options) {
    var selector = $(selector);
    $(selector).dropdown();
    $(selector).parent().find('.menu').empty();
    $.each(options.results, function (index, object) {
        $(selector).parent().find('.menu').append('<div class="item" data-value="' + object.value + '">' + object.name + '</div>')
    });
}
