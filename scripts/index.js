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

		console.log(" body h: %d, w: %d",h,w);
		
		$('footer').css('top',h+800);

		if(w<=1285 && w>=810){
			$('footer').css('height','80px');
			console.log('1 '+w);
		}else if(w<810){
			$('footer').css('height','120px');
			console.log('2 '+w);
		}else{
			$('footer').css('height','40px');
			console.log('3 '+w);
		}
		
}

var waitForFinalEvent = (function () {
	  var timers = {};
	  return function (callback, ms, uniqueId) {
	    if (!uniqueId) {
	      uniqueId = "Don't call this twice without a uniqueId";
	    }
	    if (timers[uniqueId]) {
	      clearTimeout (timers[uniqueId]);
	    }
	    timers[uniqueId] = setTimeout(callback, ms);
	  };
	})();



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


});



$(window).resize(function(){
	waitForFinalEvent(function(){
		footerAdjust();
		console.log("resize");
	});
	
});


 footerAdjust();