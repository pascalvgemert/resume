<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="nl" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="description" content="" />
		<meta name="author" content="" />
	
		<title>Pascal van Gemert - Interactive Resume</title>
		
		<!-- Bootstrap core CSS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="<?= VIEW_PATH; ?>css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= VIEW_PATH; ?>css/jquery.iedialog.min.css" rel="stylesheet" />
		<link href="<?= VIEW_PATH; ?>style.css" rel="stylesheet" />
		
	</head>
	<body>	
	
		<div class="jumbotron" data-src="<?= VIEW_PATH; ?>images/kitten_animation.gif" data-position="center right">
			<div class="container">
				<h1>404 - Page not found</h1>
				<p class="lead">We only found a sleeping kitten. <a href="<?= BASE; ?>">Return to the homepage</a></p>
			</div>
			
			<div class="overlay"></div>
		</div>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/jquery.iedialog.min.js"></script>
		<script type="text/javascript">
			
			$('body').ieDialog({
				closable: false
			});  
			
			$(document).ready(function()
			{	
				$('.jumbotron').css({ height: ($(window).height()) +'px' });
				
				lazyLoad($('.jumbotron'));
			});

			$(window).on('resize', function() 
			{  
				$('.jumbotron').css({ height: ($(window).height()) +'px' });
			});  	

			function lazyLoad(poContainer)
			{
				var lstrSource   = poContainer.attr('data-src');
				var lstrPosition = poContainer.attr('data-position');

				$('<img>').attr('src', lstrSource).load(function()
				{
					poContainer.css('background-image', 'url("'+ lstrSource +'")');
					poContainer.css('background-position', lstrPosition);
					poContainer.css('-ms-filter', '"progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'' + lstrSource + '\', sizingMethod=\'scale\')"');
					poContainer.css('filter', 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'' + lstrSource + '\', sizingMethod=\'scale\'');
				});
			}
		</script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/bootstrap.min.js"></script>
	</body>
</html>