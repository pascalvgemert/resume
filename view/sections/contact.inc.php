<h2>Contact</h2>
<p class="lead">
	&#147;If I had asked people what they wanted, they would have said faster horses. &#148;<br />- Henry Ford
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
				<a href="mailto:<?= $contact->email; ?>">
					<span class="icon icon-email"></span>
					<?= $contact->email; ?>
				</a>
			</li>
		</ul>
	</div>
</div>