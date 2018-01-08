//opens menu via hamburger
  $('#menuOpen').click(function(){
    $(this,"#navbarLinks-mobile").toggleClass('open');
    $("#navbarLinks-mobile ul").slideToggle("slow");

  });

//closes menu and resets hamburger when link selected from navbarLinks-mobile
$(".navLink").click(function(){
      $("#navbarLinks-mobile ul").slideToggle('complete', function(){
        $("#menuOpen").removeClass('open');
      });

});

let selectedTopImgX = -100;
let selectedTopImgY = -30;
$("#selectedTopImg").css(`background-position`,`${selectedTopImgX}rem ${selectedTopImgY}rem`);

$(window).scroll(function(){
	let currentScreenPos = $(window).scrollTop();
	let x = ($(window).scrollTop()/50)+selectedTopImgX;
	let y = ($(window).scrollTop()/150)+selectedTopImgY;
	// console.log(`${x}rem ${y}rem`);
	$("#selectedTopImg").css(`background-position`,`${x}rem ${y}rem`);
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

$("#nav").sticky({topSpacing:0});

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