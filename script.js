$(document).ready(function() { //kood käivitub kui leht on laetud
	
		
	//pildi mouseover, näita raami
 	$("#content img").each(function () {
		$(this).data('original', this.src)
	
	
	}).mouseenter(function(){ 
		$(this).attr('src', $(this).data('hover'))
		$("#frame").show();
		move($(this),0);
	}).mouseleave(function() {
		$(this).attr('src', $(this).data('original'))

	});
	$("#frame").mouseleave(function() {
		$(this).hide(); 
	});
	// hangi esimene pilt ning pane raam selle kohale
	move($("#content a:first-child img"), 10);
});

function frameSisu(img){
	// hangime teksti, mida kuvada
	var text=img.attr("alt"); 
	// sätime raami title div-i teksti
	$("#title").text(text);
	  
	// anname läbipaistvale osale aadressi, millele pisipildilt lingib
	var link = img.parent();
	$("#frame a").attr("href", link.attr("href"));
	 
	// anname klikitavale alale mõõtmed ja src pildi mõõtmete järgi
	$("#filler").css('width' , img.css("width"));
	$("#filler").css('height' , img.css("height"));
	$("#filler").attr("src", img.attr("src"));  
}


function move(img, time){
	// hangime pildi asukoha
	var off=img.offset();
	// hangime vajalikud piirjoonte laiused
	var imgborder=parseFloat(img.css("border-top-width")); 
	var fillerborder=parseFloat($("#filler").css("border-top-width"));
	
	// ja paigutame raami pildi ümber kasutades sujuvat liikumist
	$("#frame").animate({
	        'top' : off.top-(fillerborder-imgborder),
	        'left' : off.left-(fillerborder-imgborder)
	    }, time, function(){ 
		// muudame raami laiuse
		$("#frame").css('width' , parseFloat(img.css("width"))+fillerborder*2);
		// kuvame uue pildi  kui animatsioon on lõpetanud
		raamiSisu(img);
		// kui animatsiooni lõpus ei olda enam ühegi pildi ega ka raami kohal, ei peaks raam näha olema
		if (!$(this).is(":hover") && $("#content img:hover").length==0) {
			$(this).hide();
		}
	  });
	  
}

 jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
