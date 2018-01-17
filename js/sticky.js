// Sticky Header



$(window).scroll(function() {
    setTimeout(function(){
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
    },500);
   
});

// $(".unstuck").addClass('sticky');

function activateSticky(activate){
    if ($(window).scrollTop() > activate) {
        $("#navBrandPanel").children().appendTo($("#navBrandPanelSticky"));
        $(".unstuck").addClass('sticky');
        $(".sticky").removeClass('unstuck');
        $("#navBrandPanel").empty();
        console.log('open');
    } else {
        $(".sticky").addClass('unstuck');
        $(".unstuck").removeClass('sticky');
        setTimeout(function(){
            $("#navBrandPanelSticky").children().appendTo($("#navBrandPanel"));
            
            $("#navBrandPanelSticky").empty();
            console.log('closed');
        },2000);

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

