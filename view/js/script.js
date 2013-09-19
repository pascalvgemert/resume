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