//global

let offset=0;

//duplicates navBrandPanel and appends to the sticky version/popuates with sticky elements
$(".navBrandPanel").children().clone().appendTo($(".navBrandPanelSticky"));
$(".navBrandPanelSticky").find('.brandDiv').html(
		`<a href="index.html" alt="links to home">
			<img src="images/brand-logoOnly.svg" class="miniBrand">
		</a>`);

//opens menu via hamburger
  $('.navToggle').click(function(){
    $('.navToggle').toggleClass('open');
    
    // $('.navBrandPanelSticky').toggleClass('open');
    // $('.navBrandPanelSticky .nav').toggleClass('open');
    $(".nav").slideToggle("slow");
  });


//resets for offsetting distance from anchor to top 
function xsmallReset(){
	$('.navToggle').removeClass('open');
	$('.nav').css("display","flex");
	offset = 70;
}

function smallReset(){
	$('.navToggle').removeClass('open');
	$('.nav').css("display","none");
	offset = 30;
}

function offsetResets(){
	if($(window).width()>475){
		xsmallReset();
	}
	else{
		smallReset();
	}
}

$(window).resize(function(){
	offsetResets()
});

//click a link and page scrolls to anchor based on offsetReset

$('.navLink a').click(function(event) {
	offsetResets()
    const id = $(this).attr("href");

    let target = $(id).offset().top - offset;
    
    $('html, body').animate({
        scrollTop: target
    }, 350);
    event.preventDefault();
    
});

$(".skillLevel").each(function(){
	$(this).css('width',$(this).attr('data-width'));
	// console.log($(this).attr('data-width'));
});


// $("#skillBlock ul").children().find(attr('data-width').css('width'))



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
	$("#selectedTopImg").css(`background-position`,`${x}rem ${y}rem`);
	$("#selectedTopImg").children().width($(this).width()+currentScreenPos);
	$("#selectedTopImg").children().height($(this).height()-currentScreenPos);

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