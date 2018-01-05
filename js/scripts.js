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
