<!DOCTYPE html>
<html lang="en-GB">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
                <meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Chris Funderburg - http://chris.funderburg.me" />	
		<meta name="description" content="IT Infrastructure Manager · Dad · Old School Geek · Environmentalist · Gardener · Yogi · Cyclist · University Student · Pagan Druid · Adventurer · Seeker" />
		<meta name="keywords" content="Funderburg,Chris Funderburg,Bocan,cycling,bicycle,pagan,druid,sysadmin,infrastructure,release,manager,network,engineer,home page,genealogy,family tree,study,environment,yoga,yogi" />
		<meta property="og:title" content="Chris Funderburg : Interactive CV and Homepage" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://chris.funderburg.me/images/me.jpg" />
		<meta property="og:url" content="https://chris.funderburg.me/" />
		<meta property="og:description" content="The home page of Chris Funderburg : IT Infrastructure Manager · Dad · Old School Geek · Environmentalist · Gardener · Yogi · Cyclist · University Student · Pagan Druid · Adventurer · Seeker" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Chris Funderburg : Home - Where my story begins.</title>
		
		<!-- Bootstrap core CSS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
                <link href='https://fonts.googleapis.com/css?family=Eagle+Lake' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= VIEW_PATH; ?>style.css" rel="stylesheet" />
		
		<link rel="shortcut icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		<link rel="icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		
		<!--[if lt IE 9]>
			<script src="<?= VIEW_PATH; ?>js/html5shiv.js"></script>
			<script src="<?= VIEW_PATH; ?>js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body data-spy="scroll" data-target="#navbar-example">	 
		
		<?php 
			
			// show an different picture per day, loop through array
			$header_images = array(
				array('source' => VIEW_PATH.'images/coffee_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/hotdog_stand_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/metro_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/tower_scope_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/taxi_drive_by_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/window_rain_animation.gif', 'position' => 'bottom right'),
				array('source' => VIEW_PATH.'images/highway_animation.gif', 'position' => 'center right')
			);
			$current_index  = (@isset($_GET['header']) && is_numeric($_GET['header'])) ? intval($_GET['header']) : date('d') % count($header_images); // $_GET['header'] overwrites current header
			$current_header = (@isset($header_images[$current_index])) ? $header_images[$current_index] : current($header_images);
		
			if(date('d-m') == '26-03')
			{
				$current_header = array('source' => VIEW_PATH.'images/birthday_animation.gif', 'position' => 'center center');
			}
		?>
	
		<div id="top" class="jumbotron" data-src="<?= $current_header['source']; ?>" data-position="<?= $current_header['position']; ?>">
			<div class="container">
				<h1><?= $profile->full_name; ?></h1>
				<p class="lead">Interactive CV and Homepage</p>
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
					<li><a href="#interests">Interests</a></li>
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
		
		<div id="interests" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/interests.inc.php'); ?>
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/contact.inc.php'); ?>
			</div>
		</div>

<footer id="footer">
        <audio controls loop preload="none" title="HTML 5 Audio"> 
          <source src="mp3/TheNights.mp3" />
          <source src="ogg/TheNights.ogg" />
          Seriously? Your web browser is so old that it doesn't support html5 audio.  Install the latest <a href="http://www.mozilla.com/en-US/firefox/" target="_blank">Firefox</a> or <a href="http://www.google.com/chrome" target="_blank">Google Chrome</a>.
        </audio>
</footer>
<footer id="credit">
          <div class="text-center project-referal">This project is built with an open source framework originally<br />designed by <a href="http://www.pascalvangemert.nl/">Pascal van Gemert</a> and then forked by myself.<br /><a href="https://github.com/bocan/resume" class="btn btn-primary" target="_blank">See project on Github</a>
<br />
</div>
</footer>


		<?php include(VIEW_INCLUDE_PATH.'sections/upgrade.inc.php'); ?>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/script.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//chris.funderburg.me/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//chris.funderburg.me/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

	</body>
</html>
