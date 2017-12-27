$( function() {
    var handle = $( "#custom-handle" );
    $( "#slider" ).slider({
      create: function() {
        handle.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
      	let colorVal = Math.ceil(ui.value*2.55);
        handle.text( ui.value );
        $('#patsyColorChangeDiv').css('background-color', 'rgb(' + colorVal + ',' + colorVal + ',' + colorVal + ')');
      }
    });
  } );


// const imgHeight = $('#selectedTopImg').height();
// const imgWidth = $('#selectedTopImg').width();
// $('#selectedTopImg').height(Math.round(imgHeight)).width(Math.round(imgWidth));


// console.log(`height ${$('#selectedTopImg').height()} width ${$('#selectedTopImg').width()}`);


// $('#topImg').mousemove(function(event){
// 	clearTimeout($.data(this, 'moveTimer'));
// 	$.data(this, 'moveTimer', setTimeout(function(){
// 		let imgCoordsX = (event.pageX/4);
// 		let imgCoordsY = (event.pageY/4);
// 		// $("#selectedTopImg").animate({left: (imgCoordsX-1300) + "px"}, 1000);
// 	},500));

// 	// let imgCoordsX = (event.pageX/4);
// 	// let imgCoordsY = (event.pageY/4);
// 	// // $("#selectedTopImg").animate({left: imgCoordsX + "px"}, 500);

// });

// $("#topImg").click(function(){
	
	
// })

