// Sticky Header



$(window).scroll(function() {

        if($(window).width()>1200){
            activateSticky(500);
        }
        else if($(window).width()>970){
            activateSticky(300);
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
        $(".unstuck").addClass('sticky');
        $(".sticky").removeClass('unstuck');
    } else {
        $(".sticky").addClass('unstuck');
        $(".unstuck").removeClass('sticky');
    }
}

// Mobile Navigation
// $('.mobile-toggle').click(function() {
//     if ($('.stickyNav').hasClass('open-nav')) {
//         $('.stickyNav').removeClass('open-nav');
//     } else {
//         $('.stickyNav').addClass('open-nav');
//     }
// });

// $('.stickyNav li a').click(function() {
//     if ($('.stickyNav').hasClass('open-nav')) {
//         $('.navigation').removeClass('open-nav');
//         $('.stickyNav').removeClass('open-nav');
//     }
// });

