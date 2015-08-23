<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Call a Grill</title>

	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel=”shortcut icon” type=”image/x-icon” href=”images/favicon.ico”>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		
		var h = 0;
		var w = 0;
		
		var footerAdjust = function(){
		      var win = $(this); //this = window
		      if (win.height() >= 820) { /* ... */ }
		      if (win.width() >= 1280) { /* ... */ }
		      
		      h = $('body').height();
		      w = $('body').width();
		      
				console.log("h: %d, w: %d",h,w);
				//alert("resize");
				
				$('footer').css('top',h+2);

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

		
		</script>

</head>
<body>
	<div id="main-wrapper">	
		<header><img src="images/../images/header.jpg"></header>
		<nav>
			<ul>
				<li><a href="home.html" onclick='cliked()' class="active">Home</a></li>
				<li><a href="service.html" onclick='cliked()'>Service</a></li>
				<li><a href="kalt.html" onclick='cliked()'>Kalt</a></li>
				<li><a href="galerie.html" onclick='cliked()'>Galerie</a></li>
				<li><a href="aktuell.html" onclick='cliked()'>Aktuell</a></li>
				<li><a href="referenzen.html" onclick='cliked()'>Referenzen</a></li>
				<li><a href="kontakt.html" onclick='cliked()'>Kontakt</a></li>
			</ul>
		</nav>
		
		<article>	


		</article>

		<footer>
			<span class="impressum"><a href="impressum.html" onclick='cliked()'>Impressum</a></span> | Besuchen Sie uns auch auf  
			<a target="_blank" href="https://www.facebook.com/pages/Call-A-Grill-Asado-Argentino-M%C3%BCnchen/104575736254548">
			<img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png" width="auto" height="auto" border=0></a>
			<span style="float: auto; padding-left: 10%;" > 089 - 589 77 919  |  0178-14 29 659  | <a href="mailto:info@olivos-sl.de" target="_top">info@olivos-sl.de</a></span>
			<span style="float: right; padding-right: 1%;"> © 2015 call-a-grill by Huertix</span>
		</footer>
		
		
	</div>

	<script type="text/javascript">
		footerAdjust();
	</script>

	
</body>
</html>