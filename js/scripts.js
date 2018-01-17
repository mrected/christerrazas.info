//global

let offset=0;

//duplicates navBrandPanel and appends to the sticky version/popuates with sticky elements
$(".navBrandPanel").children().clone().appendTo($(".navBrandPanelSticky"));
$(".navBrandPanelSticky").find('.brandDiv').html('<img src="images/brand-logoOnly.svg" class="miniBrand">');

//opens menu via hamburger
  $('.navToggle').click(function(){
    $('.navToggle').toggleClass('open');
    // $("#navBrandPanel").toggleClass('open');
    // $("#navBrandPanelSticky").toggleClass('open');
    // $("#navBrandPanel").toggleClass('navBrandPanelOpen');
    $(".nav").slideToggle("slow");
  });


//resets for offsetting distance from anchor to top 
function xsmallReset(){
	$('.navToggle').removeClass('open');
	$('.nav').css("display","flex");
	offset = 270;
}

function smallReset(){
	$('.nav').css("display","none");
	offset = 0;
}

$(window).resize(function(){
	if($(window).width()>475){
		xsmallReset();
	}
	else{
		smallReset();
	}
});

//click a link and page scrolls to anchor

$('.nav a').click(function(event) {
	xsmallReset();
    const id = $(this).attr("href");
    const target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 1500);
    event.preventDefault();
});







// closes menu and resets hamburger when link selected from navbarLinks-mobile
$(".navLink").click(function(){
	if($(window).width()>475){
		xsmallReset();
	}
	else{
		smallReset();
	}
});





let selectedTopImgX = -70;
let selectedTopImgY = -20;
$("#selectedTopImg").css(`background-position`,`${selectedTopImgX}rem ${selectedTopImgY}rem`);

$(window).scroll(function(){
	let currentScreenPos = $(window).scrollTop();
	let x = ($(window).scrollTop()/10)+selectedTopImgX;
	let y = ($(window).scrollTop()/50)+selectedTopImgY;
	// console.log(`${x}rem ${y}rem`);
	$("#selectedTopImg").css(`background-position`,`${x}rem ${y}rem`);
	$("#selectedTopImg").children().width($(this).width()+currentScreenPos);
	$("#selectedTopImg").children().height($(this).height()-currentScreenPos);
	// if($(window).scrollTop()>558){
	// 	$("#nav").slideDown('slow',function(){
	// 		$(this).addClass("sticky");
	// 	});
	// }
	// else{
	// 	$("#nav").slideUp('slow',function(){
	// 		$(this).removeClass("sticky");
	// 	});
	// }
});

// $("#nav").sticky({topSpacing:0});

// $(function(){
//   $(window).scroll(function(){
//     var winTop = $(window).scrollTop();
//     if(winTop >= 30){
//       $("body").addClass("sticky-header");
//     }else{
//       $("body").removeClass("sticky-header");
//     }//if-else
//   });//win func.
// });//ready func.


//fixes jumpy scroll over fixed backround in ie11
if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
        $('body').on("mousewheel", function () {
            event.preventDefault(); 

            let wheelDelta = event.wheelDelta;
            let currentScrollPosition = window.pageYOffset;
            window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
}