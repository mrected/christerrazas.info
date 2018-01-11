// Sticky Header



$(window).scroll(function() {

    if($(window).width()>1200){
        activateSticky(580);
    }
    else if($(window).width()>970){
        activateSticky(410);
    }
    else if($(window).width()>768){
        activateSticky(340);
    }
    else{
        activateSticky(300);
    }
});

function activateSticky(activate){
    if ($(window).scrollTop() > activate) {
        $('.stickyNav').addClass('sticky');
    } else {
        $('.stickyNav').removeClass('sticky');
    }
}

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.stickyNav').hasClass('open-nav')) {
        $('.stickyNav').removeClass('open-nav');
    } else {
        $('.stickyNav').addClass('open-nav');
    }
});

$('.stickyNav li a').click(function() {
    if ($('.stickyNav').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.stickyNav').removeClass('open-nav');
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