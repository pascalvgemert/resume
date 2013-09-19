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
	
	$('a[href*=mailto]').on('click', function(e)
	{
		var lstrEmail = $(this).attr('href').replace('mailto:', '');
		
		lstrEmail = lstrEmail.split('').reverse().join('')
		
		$(this).attr('href', 'mailto:' + lstrEmail);
	});
	
	$('.navbar li a').click(function(event) 
	{
		$('.navbar-collapse').removeClass('in').addClass('collapse');
	});
	
	lstrHash = window.location.hash.replace('#/', '#');
	
	if($('a[href='+ lstrHash +']').length > 0)
	{
		$('a[href='+ lstrHash +']').trigger('click');
	}
	
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

$('#navbar-example').on('activate.bs.scrollspy', function() 
{
	window.location.hash = $('.nav .active a').attr('href').replace('#', '#/');
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