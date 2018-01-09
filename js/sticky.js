// Sticky Header



$(window).scroll(function() {

    if($(window).width()>1200){
        activateSticky(550);
    }
    else if($(window).width()>970){
        activateSticky(475);
    }
    else if($(window).width()>768){
        activateSticky(400);
    }
    else{
        activateSticky(300);
    }
});

function activateSticky(activate){
    if ($(window).scrollTop() > activate) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
}

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});