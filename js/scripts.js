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


