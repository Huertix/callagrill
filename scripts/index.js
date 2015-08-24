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








 