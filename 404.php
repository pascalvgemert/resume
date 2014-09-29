<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="en-GB />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="description" content="404" />
		<meta name="author" content="Chris Funderburg" />
	
		<title>Chris Funderburg - Interactive CV and Homepage</title>
		
		<!-- Bootstrap core CSS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="/view/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/view/css/jquery.iedialog.min.css" rel="stylesheet" />
		<link href="/view/style.css" rel="stylesheet" />
		
	</head>
	<body>	
	
		<div class="jumbotron" data-src="/view/images/kitten_animation.gif" data-position="center right">
			<div class="container">
				<h1>404 - Page not found</h1>
				<p class="lead">We only found a sleeping kitten. ISN'T HE FUZZY?!?!<br /><a href="http://chris.funderburg.me">Return to the homepage</a></p>
			</div>
			
			<div class="overlay"></div>
		</div>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="/view/js/jquery.iedialog.min.js"></script>
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
		<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	</body>
</html>
