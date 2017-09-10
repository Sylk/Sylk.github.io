//navigation slider
$('.box').on('click', function () {
    $('.menu').addClass('move');
    $('.box').addClass('move');
    return false;
});

$('.menu').on('click', function () {
    $('.menu').removeClass('move');
    $('.box').removeClass('move');
    return false;
});
//index naviation
$('.index-nav').on('click', function () {
    $('#index').removeClass('hide-div');
    $('.menu').removeClass('move');
    $('.box').removeClass('move');
    return false;
});

$('.index-nav').on('click', function () {
    $('#contact').addClass('hide-div');
    $('#work').addClass('hide-div');
    return false;
});

//contact naviation
$('.contact-nav').on('click', function () {
    $('#contact').removeClass('hide-div');
    $('.menu').removeClass('move');
    $('.box').removeClass('move');
    return false;
});

$('.contact-nav').on('click', function () {
    $('#index').addClass('hide-div');
    $('#work').addClass('hide-div');
    return false;
});

//contact naviation
$('.work-nav').on('click', function () {
    $('#work').removeClass('hide-div');
    $('.menu').removeClass('move');
    $('.box').removeClass('move');
    return false;
});

$('.work-nav').on('click', function () {
    $('#index').addClass('hide-div');
    $('#contact').addClass('hide-div');
    return false;
});

//paypment page
$('.payment-nav').on('click', function () {
    window.open("https://www.paypal.me/krakenexe", "_blank").focus();
    $('.menu').removeClass('move');
    $('.box').removeClass('move');
    return false;
});