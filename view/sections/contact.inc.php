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
			<li>
				<a href="javascript:void(0);">
					<span class="icon icon-skype"></span>
					<?= $contact->skype; ?>
				</a>
			</li>
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