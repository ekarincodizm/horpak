/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var DropdownTransition = [
    'bounce', 'tada', 'pulse', 'shake', 'flash', 'jiggle',
    'slide right', 'slide left', 'slide up', 'slide down',
    'browse', 'browse right',
    'swing down', 'swing up', 'swing right', 'swing left',
    'fly down', 'fly up', 'fly right', 'fly left',
    'drop', 'vertical flip', 'horizontal flip',
    'fade right', 'fade left', 'fade down', 'fade up', 'fade',
    'scale'
];
var DropdownValue = {};

$(document).ready(function () {
    $('.right.menu.open').on("click", function (e) {
        e.preventDefault();
        $('.ui.vertical.menu').toggle();
    });
    renderDropdown('horpak_id');
    customNavbarMenu();
    renderDropdownAddress();
    $('.ui.dropdown.horpak').dropdown({transition: DropdownTransition[getDayOfCurrentDate()]});
});

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
    $('.ui.dropdown.item').dropdown({transition: DropdownTransition[getDayOfCurrentDate()]});
}

function setDinamicOptions(selector, options) {
    var att = "data-dinamic-opt";
    $(selector).find('[' + att + ']').remove();
    var html = $(selector + ' .menu').html();
    $.each(options, function (index, object) {
        html += '<div class="item" data-value="' + object.value + '" ' + att + '>' + object.name + '</div>';
    });
    $(selector + ' .menu').html(html);
    $(selector).dropdown({transition: DropdownTransition[getDayOfCurrentDate()]});
}
function setDropdownOptions(selector, options) {
    var selector = $(selector);
    $(selector).dropdown({transition: DropdownTransition[getDayOfCurrentDate()]});
    $(selector).parent().find('.menu').empty();
    $.each(options.results, function (index, object) {
        $(selector).parent().find('.menu').append('<div class="item" data-value="' + object.value + '">' + object.name + '</div>')
    });
}

function renderDropdown(elementName) {
    console.log('DropdownTransition :: ' + DropdownTransition.length);
    $('select[name="' + elementName + '"]').dropdown({
        transition: DropdownTransition[getDayOfCurrentDate()],
        onChange: function (value, text, $choice) {
            if (value != '') {
                $('.ui.dropdown.selection.error');
                $('select[name="' + elementName + '"] option[value=' + value + ']').attr('selected', 'selected');
            }
        },
    });
}

function getDayOfCurrentDate() {
    var now = new Date();
    var day = now.getDay();
    if (day > DropdownTransition.length) {
        return 0;
    }
    return day;
}

function renderDropdownAddress() {
    $('select[name="province"]').dropdown({
        transition: DropdownTransition[getDayOfCurrentDate()],
        onChange: function (value, text, $choice) {
            DropdownValue.province = value;
            var urlState = $('select[name="state"]').attr('data-url');
            $.get(urlState, {provinceId: value}, function (resp) {
                setDropdownOptions('select[name="state"]', resp);
            }, 'json');
        },
    });
    $('select[name="state"]').dropdown({
        transition: DropdownTransition[getDayOfCurrentDate()],
        onChange: function (value, text, $choice) {
            DropdownValue.state = value;
            $('input[name="state"]').val(value);
            var urlCity = $('select[name="city"]').attr('data-url');
            $.get(urlCity, {state: value}, function (resp) {
                setDropdownOptions('select[name="city"]', resp);
            }, 'json');
        },
    })
    $('select[name="city"]').dropdown({
        transition: DropdownTransition[getDayOfCurrentDate()],
        onChange: function (value, text) {
            DropdownValue.city = value;
            $('input[name="city"]').val(value);
            var urlZipcode = $('input[name="zipcode"]').attr('data-url');
            $.get(urlZipcode, {amphur: DropdownValue.state}, function (resp) {
                $('input[name="zipcode"]').val(resp.results.postcode);
            }, 'json');
        }
    });
}
