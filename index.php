<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Call a Grill</title>

<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel='stylesheet' 
				type='text/css' 
				media='only screen and (min-width: 530px) and (min-device-width: 481px)'
				href='css/wide.css' />

<link rel='stylesheet' 
				type='text/css'
				media='only screen and (max-width: 480px)' 
				href='css/smartphone.css' />  

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
			
			$('footer').css('top',h+685);
			
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
	


	$(document).ready(function(){
		$('article').load('home.html', function(data){
			$(this).html(data);
		}); 
		
		$('nav').find('a').click(function(e){
		     e.preventDefault();
		     $('article').load($(this).attr('href'));
		  });
			
		$('b').find('a').click(function(e){
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
	

     

	
	</script>

</head>
<body>
	<div id="main-wrapper">	
		<header><img src="images/../images/header.jpg" width="auto" height="auto"></header>
		<nav>
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="service.html">Service</a></li>
				<li><a href="kalt.html">Kalt</a></li>
				<li><a href="galerie.html">Galerie</a></li>
				<li><a href="aktuell.html">Aktuell</a></li>
				<li><a href="referenzen.html">Referenzen</a></li>
				<li><a href="kontakt.html">Kontakt</a></li>
			</ul>
		</nav>
		
		<article>	
		</article>
		
		<footer>
			<span>Call a Grill.de @ 2015 - <b><a href="impressum.html">Impressum</a></b> - Aktuelle Infos in </span>
			<a target="_blank" href="https://www.facebook.com/pages/Call-A-Grill-Asado-Argentino-M%C3%BCnchen/104575736254548">
			<img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png" width="auto" height="auto" border=0></a>
		</footer>
	</div>

	<script type="text/javascript">
		footerAdjust();
	</script>

	
</body>
</html>