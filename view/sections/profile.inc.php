<h2>Profile</h2>
<p class="lead">I&#039;m an IT Infrastructure Manager, Charity Trustee, and University Student</p>
<hr />

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p>
			<?= $profile->biography; ?>
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="<?= VIEW_PATH; ?>images/chris_funderburg.png" alt="Chris Funderburg" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br />
			<?= $profile->full_name; ?><br />
			<strong>Age:</strong><br />
			<?= $profile->age; ?> years<br />
			<strong>Relationships:</strong><br />
			<?= $profile->relationships; ?><br />
			<strong>Current Location:</strong><br />
			<?= $profile->current_location->city; ?>, <?= $profile->current_location->country; ?>, <?= $profile->current_location->planet; ?>
			<strong>Home Town:</strong><br />
			<?= $profile->home_town_location->city; ?>, <?= $profile->home_town_location->country; ?>, <?= $profile->home_town_location->planet; ?>
		</p>
		
		<a href="https://twitter.com/TheSoundODrums" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @TheSoundODrums</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
</div>
