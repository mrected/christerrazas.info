$('#menuToggle').click(function(){
  $(this).toggleClass('open');
  $('#nav').toggleClass('open');
})

const imgHeight = $('#selectedTopImg').height();
const imgWidth = $('#selectedTopImg').width();
$('#selectedTopImg').height(Math.round(imgHeight)).width(Math.round(imgWidth));


// console.log(`height ${$('#selectedTopImg').height()} width ${$('#selectedTopImg').width()}`);

$('#topImg').mousemove(function(event){
	let imgCoordsX = event.pageX;
	let imgCoordsY = event.pageY;
	console.log(`X: ${imgCoordsX} Y: ${imgCoordsY}`);
})