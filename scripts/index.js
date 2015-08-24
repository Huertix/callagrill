var h = 0;
var w = 0;

var footerAdjust = function(){
      var win = $(this); //this = window
      if (win.height() >= 820) { /* ... */ }
      if (win.width() >= 1280) { /* ... */ }
      
      h = $('body').height();
      w = $('body').width();
      
		console.log(" body h: %d, w: %d",h,w);
		//alert("resize");
		
		if(w<=1190){
			$('footer').css('height','80px');
			console.log('1 '+w);
		}else{
			$('footer').css('height','40px');
			console.log('2 '+w);
		}
		
}

function cliked(){	

	$("a").each(function() {
	    	$(this).removeClass("active");
	});
	

	$('nav').find('a').click(function(e){
	    e.preventDefault();
	    
			
	    $(this).addClass("active");
	});
}


$(document).ready(function(){
	$('article').load('home.html', function(data){
		$(this).html(data);
	}); 
	
	$('nav').find('a').click(function(e){
	     e.preventDefault();
	     $('article').load($(this).attr('href'));
	     
	});
		
	$('.impressum').find('a').click(function(e){
	     e.preventDefault();
	     $('article').load($(this).attr('href'));
	});	

	footerAdjust();

});

$(window).resize(function(){
		footerAdjust();
		console.log("resize");		
});
