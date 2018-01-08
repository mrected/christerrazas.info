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

let selectedTopImgX = -45;
let selectedTopImgY = -12;
$("#selectedTopImg").css(`background-position`,`${selectedTopImgX}rem ${selectedTopImgY}rem`);

$(window).scroll(function(){
	let x = ($(window).scrollTop()/20)+selectedTopImgX;
	let y = ($(window).scrollTop()/50)+selectedTopImgY;
	// console.log(`${x}rem ${y}rem`);
	$("#selectedTopImg").css(`background-position`,`${x}rem ${y}rem`);
	console.log($(window).scrollTop());
});



//fixes jumpy scroll over fixed backround in ie11
if(navigator.userAgent.match(/Trident\/7\./)) { // if IE
        $('body').on("mousewheel", function () {
            event.preventDefault(); 

            let wheelDelta = event.wheelDelta;
            let currentScrollPosition = window.pageYOffset;
            window.scrollTo(0, currentScrollPosition - wheelDelta);
        });
}