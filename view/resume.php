<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="nl" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Pascal van Gemert" />	
		<meta name="description" content="I'm Pascal van Gemert, a ninja webdeveloper / creative programmer with good knowledge of front-end technics." />
		<meta name="keywords" content="Pascal van Gemert, Interactive Resume, PHP programmer, Web developer, Startup, Interactive CV, Resume, CV, Whoopaa, HRMatches, Sanitairwinkel, Algorithms, PHP, MySQL, OOP" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Pascal van Gemert - Web Developer - Interactive Resume</title>
		
		<!-- Bootstrap core CSS -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="<?= VIEW_PATH; ?>css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= VIEW_PATH; ?>style.css" rel="stylesheet" />
		
		<link rel="shortcut icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		<link rel="icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		
		<!--[if lt IE 9]>
			<script src="<?= VIEW_PATH; ?>js/html5shiv.js"></script>
			<script src="<?= VIEW_PATH; ?>js/respond.min.js"></script>
		<![endif]-->
		
		<!-- Begin Inspectlet Embed Code -->
		<script type="text/javascript" id="inspectletjs">
			window.__insp = window.__insp || [];
			__insp.push(['wid', 92785244]);
			(function() {
				function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://www.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }
				if (window.attachEvent){
					window.attachEvent('onload', __ldinsp);
				}else{
					window.addEventListener('load', __ldinsp, false);
				}
			})();
		</script>
		<!-- End Inspectlet Embed Code -->
	</head>
	<body data-spy="scroll" data-target="#navbar-example">	 
		
		<div class="opl"><a href="http://onepagelove.com/pascal-van-gemert" target="_blank">pascalvangemert.nl featured on One Page Love</a></div>
		
		<?php 
			
			// show an different picture per day, loop through array
			$header_images = array(
				array('source' => VIEW_PATH.'images/hotdog_stand_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/metro_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/taxi_drive_by_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/tower_scope_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/highway_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/window_rain_animation.gif', 'position' => 'bottom right'),
				array('source' => VIEW_PATH.'images/coffee_animation.gif', 'position' => 'center center')
			);
			$current_index  = (@isset($_GET['header']) && is_numeric($_GET['header'])) ? intval($_GET['header']) : date('d') % count($header_images); // $_GET['header'] overwrites current header
			$current_header = (@isset($header_images[$current_index])) ? $header_images[$current_index] : current($header_images);
		
			if(date('d-m') == '19-11')
			{
				$current_header = array('source' => VIEW_PATH.'images/birthday_animation.gif', 'position' => 'center center');
			}
		?>
	
		<div id="top" class="jumbotron" data-src="<?= $current_header['source']; ?>" data-position="<?= $current_header['position']; ?>">
			<div class="container">
				<h1><?= $profile->full_name; ?></h1>
				<p class="lead">Interactive resume</p>
			</div>
			
			<div class="overlay"></div>
			
			<a href="#profile" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
		<nav class="navbar navbar-default" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#profile">Profile</a></li>
					<li><a href="#experiences">Experiences</a></li>
					<li><a href="#abilities">Abilities</a></li>
					<?php /* <li><a href="#interests">Interests</a></li> */ ?>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/profile.inc.php'); ?>
			</div>	
		</div>	
		
		<div id="experiences" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/experiences.inc.php'); ?>
		</div>
		
		<div class="background-white">
			<div id="abilities" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/abilities.inc.php'); ?>
			</div>
		</div>
		
		<?php /*
		<div id="interests" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/interests.inc.php'); ?>
		</div>
		*/ ?>
		
		<div id="projects" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/projects.inc.php'); ?>
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/contact.inc.php'); ?>
			</div>
		</div>
		
		<?php include(VIEW_INCLUDE_PATH.'sections/upgrade.inc.php'); ?>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/script.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/bootstrap.min.js"></script>
		
		<!-- Google Analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3361587-8']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</body>
</html>