<h2>Contact</h2>
<p class="lead">
	&ldquo;If I had asked people what they wanted, they would have said faster horses. &rdquo;<br />- Henry Ford
</p>

<hr />

<div class="row">
	<div class="col-md-6">
		<ul class="no-bullets">
			<li>
				<a href="<?= $contact->twitter; ?>" target="_blank">
					<span class="icon icon-twitter"></span>
					<?= $contact->twitter; ?>
				</a>
			</li>
			<li>
				<a href="<?= $contact->linkedin; ?>" target="_blank">
					<span class="icon icon-linkedin"></span>
					<?= $contact->linkedin; ?>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			<!--<li>
				<a href="javascript:void(0);">
					<span class="icon icon-skype"></span>
					<?= $contact->skype; ?>
				</a>
			</li>-->
			<li>
				<a href="mailto:<?= strrev($contact->email); ?>">
					<span class="icon icon-email"></span>
					<span style="unicode-bidi:bidi-override; direction: rtl;">
						<?= strrev($contact->email); ?>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>

<hr />

<div class="text-center">
	<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.c633b87376883931e7436b93bb46a699.en.html#_=1452458429192&amp;dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=http%3A%2F%2Fwebcache.googleusercontent.com%2Fsearch%3Fq%3Dcache%3AcRExpd3vwGsJ%3Awww.pascalvangemert.nl%2F%2B%26cd%3D1%26hl%3Den%26ct%3Dclnk%26gl%3Dnl%26lr%3Dlang_nl%257Clang_en&amp;size=m&amp;text=Pascal%20van%20Gemert%20-%20Web%20Developer%20-%20Interactive%20Resume&amp;type=share&amp;url=http%3A%2F%2Fpascalvangemert.nl%2F%3Fref%3Dtwitter&amp;via=pascalvgemert" style="position: static; visibility: visible; width: 62px; height: 20px;" data-url="http://pascalvangemert.nl/?ref=twitter"></iframe>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fpascalvangemert.nl%3Fref%3Dfacebook&amp;width=120&amp;height=21&amp;colorscheme=dark&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false&amp;appId=143175172374579" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowtransparency="true"></iframe>
</div>