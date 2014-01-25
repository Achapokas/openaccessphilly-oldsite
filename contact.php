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
<link href="css/emailmeform.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://www.emailmeform.com/builder/js/dynamic.php?t=post&t2=0&use_CDN=true"></script>

</head>

<body class="contact">
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
			
			<div class="text">
		
				<h1>Contact Us</h1>
			
				<p>You can email us directly at <a href="mailto:info@openaccessphilly.com">info@openaccessphilly.com</a> or fill out the form below.</p>
				
				
				<!-- EmailMeForm: emailmeform.com -->
				<!--div id="emf-container-outer"-->
					<div id="emf-container">
					
						<p class="allrequired">All fields are required.</p>
						
						<form id="emf-form" class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/zN57r3eM70" name="emf-form">
							<ul>
								<li id="emf-li-0" class="emf-li-field emf-field-text data_container" style="text-align:">
									<label class="emf-label-desc" for="element_0">Name:</label>
									<div class="emf-div-field">
										<input id="element_0" name="element_0" value="" size="30" type="text" class="validate[required]" />
									</div>
									<div class="emf-clear"></div>
								</li>
								<li id="emf-li-1" class="emf-li-field emf-field-email data_container" style="text-align:">
									<label class="emf-label-desc" for="element_1">Email:</label>
									<div class="emf-div-field">
										<input id="element_1" name="element_1" class="validate[required,custom[email]]" value="" size="30" type="text" />
									</div>
									<div class="emf-clear"></div>
								</li>
								<li id="emf-li-2" class="emf-li-field emf-field-textarea data_container" style="text-align:">
									<label class="emf-label-desc" for="element_2">Message:</label>
									<div class="emf-div-field">
										<textarea id="element_2" name="element_2" rows="10" class="validate[required]"></textarea>
									</div>
									<div class="emf-clear"></div>
								</li>
								<li id="emf-li-recaptcha">
									<script type="text/javascript">
									//<![CDATA[
									$(function(){
											$('#recaptcha_response_field').addClass('validate[required]');
									});
									//]]>
									</script>
									<div>
										<script type="text/javascript">
										//<![CDATA[
										var RecaptchaOptions = {
											theme: 'clean',
											custom_theme_widget: 'emf-recaptcha_widget'
											};
										//]]>
										</script>
										<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9"></script> 
										<noscript>
											<iframe src="https://www.google.com/recaptcha/api/noscript?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9" height="300" width="500" frameborder="0"></iframe>
											<br />
											<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea> 
											<input type="hidden" name="recaptcha_response_field" value="manual_challenge" />
										</noscript>
									</div>
								</li>
								<li id="emf-li-post-button" class="middle">
									<input class="button" value="Send email" type="submit" />
								</li>
							</ul>
							
							<input name="element_counts" value="3" type="hidden" /> <input name="embed" value="forms" type="hidden" />
						  
						</form>
					</div>
				<!--/div-->
				<script type="text/javascript">
				//<![CDATA[
				var EMF_Safari_Captcha = (function(){
						this.isChrome = (/chrome/.test(navigator.userAgent.toLowerCase()));
						this.isSafari = !this.isChrome && (/safari/.test(navigator.userAgent.toLowerCase()));
						this.process_captcha = function(){
								EMF_jQuery('a#captcha_code_refresh').trigger('click');
								get_valid_captcha();
						}
						this.firstTimeSession = true;
						this.safari_submit_session_form = function(){
								if (this.firstTimeSession) {
												this.firstTimeSession = false;
												EMF_jQuery("#safari_sessionform").submit();
												setTimeout('process_captcha()',2000);
								}
						}
						return this;
				})();
				EMF_jQuery(function(){
						EMF_jQuery("#emf-form").validationEngine({
								validationEventTriggers:"blur",
								scroll:true
						});
				
				
				
						if(document.getElementById('captcha_image')!=null){
								if(EMF_Safari_Captcha.isSafari){
												EMF_jQuery("body").append('<iframe id="safari_sessionframe" name="safari_sessionframe" onload="EMF_Safari_Captcha.safari_submit_session_form();" src="http://www.emailmeform.com/get_safari_cookies.php" style="display:none;"><\/iframe><form id="safari_sessionform" enctype="application/x-www-form-urlencoded" action="http://www.emailmeform.com/get_safari_cookies.php" target="safari_sessionframe" action="post"><\/form>');
								}else{
										get_valid_captcha();
								}
						}
				
						EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);
						EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);
				
						var form_obj=EMF_jQuery("#emf-container form");
						if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1){
								form_obj.attr('action', form_obj.attr('action')+document.location.hash);
						}
				
				});
				
				EMF_jQuery(window).load(function(){
						post_message_for_frame_height();
				});
				
				//]]>
				</script>
				<!-- /EmailMeForm -->



			</div>
			
		</div>	
		
				
		
		
	</div><!-- /main -->
	
	
	
</div><!-- /wrapper -->


<? include('includes/footer.php')?>
	
	

</div>
</body>
</html>