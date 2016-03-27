/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var ModalTransition = [
    'slide up', 'slide down', 'scale', 'fade down',
    'fade up', 'fade', 'vertical flip', 'horizontal flip',
    'bounce', 'tada', 'pulse', 'flash', 'shake'];

$(document).ready(function () {
    $('.ui.button.search').on('click', function () {
        $('.ui.modal').modal({closable: false}).modal('setting').modal('show');
    });
});

function modalForm() {
    $('.ui.modal').modal({closable: false}).modal('setting', 'transition', ModalTransition[1]).modal('show');
}


