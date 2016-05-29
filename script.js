function flip(){
$('.image').mouseover(function(){
    $(this).addClass('img');
   $(this).addClass('selected');
}).mouseleave(function(){
    $(this).removeClass('img');
	$('.selected').removeClass('selected'); // removes the previous selected class
});

}