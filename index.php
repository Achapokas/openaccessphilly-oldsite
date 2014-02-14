<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
   Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>OpenAccessPhilly.com</title>

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.idTabs.2.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.lite.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	$(".idTabs").idTabs();
  
	$('.graphic').cycle({
		fx: 'fade',
		speed: 1000, 
    	timeout: 5000 
	});
	
});
</script>

</head>

<body class="home">
<div id="outer-wrapper">

<div id="wrapper">
	
	<a href="/"><img class="logo" src="/images/logoOAP.png" /></a>
	
	
	<div id="main">
	
	
		<div id="header">
	
			<div id="nav">
			
<? include('includes/nav-main.php')?>

<? include('includes/nav-topsecondary.php')?>

			</div>
			
		</div><!-- /header -->
	
	
		<div class="section1 clearfix">
		
			<div id="intro">
				<h1>A network of passionate, engaged and active Philadelphia citizens</h1>
				<p>Every citizen with a passion for their community should be able to positively impact it without bureaucratic impediments.</p>
			</div>
			
			<div class="graphic">
				<img src="/images/photoslide-indyhall.jpg" />
				<img src="/images/photoslide-handsin.jpg" />
				<img src="/images/photoslide-love.jpg" />
				<img src="/images/photoslide-skyline.jpg" />
				<img src="/images/photoslide-studentscomputer.jpg" />
			</div>
			
		</div>
		
		
		<div class="section2 clearfix">
			
			
			<div id="initiatives">
				
				<ul class="idTabs clearfix">
					<!-- bizarre <li> tag placement to avoid extra spacing because they''re inline-block. see end of this article:
					http://robertnyman.com/2010/02/24/css-display-inline-block-why-it-rocks-and-why-it-sucks/ -->
					<li><a href="#civicparticipation">Civic Participation &amp; Innovation</a></li><li>
					<a href="#freeinformation">Free Information Flow</a></li><li>
					<a href="#digitalinclusion">Digital Inclusion</a></li><li>
					<a href="#infotec">Infotec Biz Growth</a></li>
				</ul>
				
				<div id="civicparticipation" class="initiative clearfix">
					<p class="header">Civic Participation &amp; Innovation</p>
					<p>Leveraging powerful and sophisticated Internet-based tools so that Philadelphians can organize around and advance meaningful change in their neighborhoods and elsewhere.</p>
					
					<p class="header">Featured Projects</p>
					<ul class="projects">
						<li>
						<a href="http://philly.changeby.us/">Philly Change By Us</a>
						<p>Share ideas, start projects, connect with resources, and make your community better</p>
						</li>
						<li>
						<a href="http://www.facebook.com/ipledgephilly">I Pledge Philly</a>
						<p>Philadelphia is what its people decide it is. What are you prepared to do?</p>
						</li>
						<li>
						<a href="http://phillyhistory.org">PhillyHistory.org</a>
						<p>Historical photo and map collections from a variety of city organizations</p>
						</li>
					</ul>
					
				</div>
				
				<div id="freeinformation" class="initiative clearfix">
					<p class="header">Free Information Flow</p>
					<p>Providing Philadelphians with the data, information and applications they need to advance meaningful change in their communities.</p>
					
					<p class="header">Featured Projects</p>
					<ul class="projects">
						<li>
						<a href="http://opendataphilly.org">Open Data Philly</a>
						<p>Exposing public datasets for civic innovation</p>
						</li>
						<li>
						<a href="http://projectopenvoice.com">Project Open Voice</a>
						<p>Curated Philadelphia-centric and community support video content</p>
						</li>
					</ul>
					
				</div>

				<div id="digitalinclusion" class="initiative clearfix">
					<p class="header">Connecting Philadelphia to a Digital Future</p>
					<p>Provide physical infrastructure so that citizens can <em>access</em> technology, but also develop content and training programs so that citizens can <em>adopt</em> technology.</p>
					
					<p class="header">Featured Projects</p>
					<ul class="projects">
						<li>
						<a href="http://freedomringspartnership.com">Freedom Rings</a>
						<p>77 computer centers across Philadelphia</p>
						</li>
						<li>
						<a href="http://internetessentials.com">Internet Essentials</a>
						<p>Affordable Internet program</p>
						</li>
						<li>
						<a href="http://freelibrary.org/libserv/hotspots.htm">Free Library Hotspots</a>
						<p>Provide computer access &amp; training to library patrons</p>
						</li>
					</ul>
					
				</div>

				<div id="infotec" class="initiative clearfix">
					<p class="header">Economic Development in the Infotec space</p>
					<p>Removing roadblocks, providing incentives, and supporting the IT producing/using sectors to increase employment, revenue, productivity, prominence, and innovation.</p>
					
					<p class="header">Featured Projects</p>
					<ul class="projects">
						<li>
						<b>ExCite Center</b>
						</li>
						<li>
						<b>I Work in Philly</b>
						</li>
					</ul>
					
				</div>

				
			</div>
				
			
			<div id="twitterfeed">
			
				<div class="follow"><p><a href="http://twitter.com/openaccessphl">@OpenAccessPHL on Twitter</a></p></div>
				
				<div class="latesttweet">
					<a class="twitter-timeline" href="https://twitter.com/OpenAccessPHL" data-widget-id="426887769986564096">Tweets by @OpenAccessPHL</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				
			</div>
		
		
		</div>
		
		
		
		<!--div id="latestprojects" class="clearfix">
			
			<h2>Latest Projects</h2>
			
			<div class="column">
				<a href="#"><img class="projectthumb" src="http://placekitten.com/100/100?image=10" /></a>
				<p class="projecttitle"><a href="#">Project Name Lorem Ipsum</a></p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Learn more</a></p>
			</div>
			
			<div class="column">
				<a href="#"><img class="projectthumb" src="http://placekitten.com/100/100?image=11" /></a>
				<p class="projecttitle"><a href="#">Project Name Lorem Ipsum</a></p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Learn more</a></p>
			</div>
			
			<div class="column">
				<a href="#"><img class="projectthumb" src="http://placekitten.com/100/100?image=12" /></a>
				<p class="projecttitle"><a href="#">Project Name Lorem Ipsum</a></p>
				<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Learn more</a></p>
			</div>
			
		</div-->
		
		
		
		<div id="conference" class="clearfix">
			
			<iframe src="http://www.eventbrite.com/e/openaccessphl-march-2014-convening-tickets-10559787609" frameborder="0" height="1000" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
			
		</div>
		
		
		
	</div><!-- /main -->
	
	
	
</div><!-- /wrapper -->


<? include('includes/footer.php')?>
	
	

</div><!-- /outer-wrapper -->
</body>
</html>
