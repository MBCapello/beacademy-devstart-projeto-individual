import './bootstrap';

import '../sass/app.scss'

$(".alert-dismissible").fadeTo(2000, 500).slideUp (500, function(){
    $(".alert-dismissible").alert('close');
});

$(document).ready(function () {
    $("#birth_date").mask('00/00/0000', {reverse: false});
    $("#phone").mask('(00) 00000-0000', {reverse: false});
    $("#cpf").mask('000.000.000-00', {reverse: false});
    $("#postal-code").mask('00000-000', {reverse:false});
});
