/*$('body').ieDialog({
	closable: false
});  */

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
	
	var loBrowserVersion = getBrowserAndVersion();
	
	if(loBrowserVersion.browser == 'Explorer' && loBrowserVersion.version < 8)
	{ 
		$('#upgrade-dialog').modal({
			backdrop: 'static',
			keyboard: false
		});
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

function getBrowserAndVersion() 
{
	var laBrowserData = [
		{
			string: 		navigator.userAgent,
			subString: 		'MSIE',
			identity: 		'Explorer',
			versionSearch: 	'MSIE'
		}
	];
	
	return {
		browser: searchString(laBrowserData) || 'Modern Browser',
		version: searchVersion(navigator.userAgent) || searchVersion(navigator.appVersion) || '0.0'
	};
}

function searchString(data) 
{
	for (var i=0;i<data.length;i++)	
	{
		var dataString 	= data[i].string;
		var dataProp 	= data[i].prop;
		
		this.versionSearchString = data[i].versionSearch || data[i].identity;
		
		if(dataString) 
		{
			if (dataString.indexOf(data[i].subString) != -1)
			{
				return data[i].identity;
			}
		}
		else if(dataProp)
		{
			return data[i].identity;
		}
	}
}
	
function searchVersion(dataString) 
{
	var index = dataString.indexOf(this.versionSearchString);
	if (index == -1) return;
	return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
}	