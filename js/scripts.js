$('#menuToggle').click(function(){
  $(this).toggleClass('open');
  // $('#nav').toggleClass('open');
})

// $('#menuToggle').toggle(function(){
//   $('#navbarLinks').addClass('open');
//   // $('#nav').toggleClass('open');
// });

$('#menuToggle').click(function(){
	$('#navbarLinks').toggle("fast");
})