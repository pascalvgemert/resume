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
	<body data-spy="scroll" data-target="#navbar-example">	
		
		<?php 
			
			// show an different picture per day, loop through array
			$header_images = array(
				array('source' => VIEW_PATH.'images/hotdog_stand_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/metro_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/taxi_drive_by_animation.gif', 'position' => 'center center'),
				array('source' => VIEW_PATH.'images/tower_scope_animation.gif', 'position' => 'center right'),
				array('source' => VIEW_PATH.'images/kitten_animation.gif', 'position' => 'center right')
			);
			$current_index  = date('d') % count($header_images);
			$current_header = (@isset($header_images[$current_index])) ? $header_images[$current_index] : $header_images[4];
		
		?>
	
		<div class="jumbotron" data-src="<?= $current_header['source']; ?>" data-position="<?= $current_header['position']; ?>">
			<div class="container">
				<h1>Pascal van Gemert</h1>
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
					<li><a href="#interests">Interests</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<?php include(VIEW_INCLUDE_PATH.'sections/profile.inc.php'); ?>
		</div>	
		
		<div id="experiences" class="container">
			<h2>Experiences</h2>
			<p class="lead">
				&#147;Protons give an atom its identity, electrons its personality.&#148;<br />- Bill Bryson, A short history of nearly everything
			</p>
			
			<hr />
			
			<h3>Educations</h3>
			
			<div class="experiences">
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
			</div>
			
			<hr />
			
			<h3>Careers</h3>
			
			<div class="experiences">
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>Avans Hogeschool</h4>
						<p class="experience-period">sep 2004 - jun 2008</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Bachelor - Hoger Informatica ( Specialization in Multimedia )</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch
								</span>
							</span>
						</p>
					</div>
				</div>
				
				<div class="experience row">
					<div class="col-md-4">
						<h4>SOAP - Indepedent Hair Designers</h4>
						<p class="experience-period">sep 2007 - heden</p>
					</div>
					<div class="col-md-8">
						<p>
							<strong>Ontwikkeling / Design website</strong>
							<span class="hidden-phone">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia pulvinar enim, vel ultrices lorem tempor et. 
								Pellentesque aliquet rutrum eros vitae posuere.
							</span>
							<span class="experience-details">
								<span class="location">
									<span class="glyphicon glyphicon-map-marker"></span>
									&#039;s-Hertogenbosch 
								</span>
								<span class="seperator">|</span>
								<span class="link">
									<span class="glyphicon glyphicon-link"></span>
									<a href="#">http://www.soaphair.nl/</a>
								</span>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="background-white">
			<?php include(VIEW_INCLUDE_PATH.'sections/abilities.inc.php'); ?>
		</div>
		
		<div id="interests" class="container">
			<h2>Interests</h2>
			<p class="lead">
				&#147;Choose a job you love, and you will never have to work a day in your life.&#148;<br />- Confucius
			</p>
			
			<hr />
			
			<div class="row">
				<div class="col-md-4 left"><img src="<?= VIEW_PATH; ?>images/interest_sport.png" alt="Sports" /></div>
				<div class="col-md-8 interest-content">
					<h3>Sports</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Explicabo voluptatum delectus illum non animi libero nesciunt saepe sequi deleniti itaque repudiandae veniam facere harum ipsa ut ducimus velit quibusdam provident.
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 right"><img src="<?= VIEW_PATH; ?>images/interest_algorithm.png" alt="Algorithms" /></div>
				<div class="col-md-8 interest-content">
					<h3>Algorithms</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Explicabo voluptatum delectus illum non animi libero nesciunt saepe sequi deleniti itaque repudiandae veniam facere harum ipsa ut ducimus velit quibusdam provident.
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 left"><img src="<?= VIEW_PATH; ?>images/interest_sport.png" alt="Sports" /></div>
				<div class="col-md-8 interest-content">
					<h3>Sports</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						Explicabo voluptatum delectus illum non animi libero nesciunt saepe sequi deleniti itaque repudiandae veniam facere harum ipsa ut ducimus velit quibusdam provident.
					</p>
				</div>
			</div>
		</div>
		
		<div class="background-gray">
			<div id="contact" class="container">
				<h2>Contact</h2>
				<p class="lead">
					&#147;If I had asked people what they wanted, they would have said faster horses. &#148;<br />- Henry Ford
				</p>
				
				<hr />
				
				<div class="row">
					<div class="col-md-6">
						<ul class="no-bullets">
							<li>
								<a href="">
									<span class="icon icon-twitter"></span>
									http://twitter.com/pascalvgemert
								</a>
							</li>
							<li>
								<a href="">
									<span class="icon icon-linkedin"></span>
									http://linkedin.com/in/pascalvgemert
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="no-bullets">
							<li>
								<a href="">
									<span class="icon icon-skype"></span>
									pascalvangemert
								</a>
							</li>
							<li>
								<a href="">
									<span class="icon icon-email"></span>
									pascal@pascalvangemert.nl
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/jquery.iedialog.min.js"></script>
		<script type="text/javascript">
			
			$('body').ieDialog({
				closable: false
			});  
			
			var lnStickyNavigation;
			
			$(document).ready(function()
			{	
				lnStickyNavigation = $('.scroll-down').offset().top + 20;
				
				$('.jumbotron').css({ height: ($(window).height()) +'px' });
				
				stickyNav();  
				
				$('a[href*=#]').on('click', function(e)
				{
					e.preventDefault();
					
					if( $( $.attr(this, 'href') ).length > 0 )
					{
						$('html, body').animate(
						{
							scrollTop: $( $.attr(this, 'href') ).offset().top
						}, 400);
					}
					return false;
				});
				
				$('.navbar li a').click(function(event) 
				{
					$('.navbar-collapse').removeClass('in').addClass('collapse');
				});
				
				lazyLoad($('.jumbotron'));
			});
			
			$(window).on('scroll', function() 
			{  
				stickyNav();  
			});  

			$(window).on('resize', function() 
			{  
				lnStickyNavigation = $('.scroll-down').offset().top + 20;
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
			
			function stickyNav()
			{         
				if($(window).scrollTop() > lnStickyNavigation) 
				{   
					$('body').addClass('fixed');  
				} 
				else 
				{  
					$('body').removeClass('fixed');   
				}  
			}
		</script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/bootstrap.min.js"></script>
	</body>
</html>