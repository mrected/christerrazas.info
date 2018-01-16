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

// $(".unstuck").addClass('sticky');

function activateSticky(activate){
    if ($(window).scrollTop() > activate) {
        $("#navBrandPanel").children().appendTo($("#navBrandPanelSticky"));
        $(".unstuck").addClass('sticky');
        $(".sticky").removeClass('unstuck');
        $("#navBrandPanel").empty();
    } else {
        $("#navBrandPanelSticky").children().appendTo($("#navBrandPanel"));
        $(".sticky").addClass('unstuck');
        $(".unstuck").removeClass('sticky');
        $("#navBrandPanelSticky").empty();
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

