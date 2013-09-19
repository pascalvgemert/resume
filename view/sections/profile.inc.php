<h2>Profile</h2>
<p class="lead">I&#039;m a ninja webdeveloper / creative programmer</p>

<hr />

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p>
			<?= $profile->biography; ?>
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="<?= VIEW_PATH; ?>images/pascal_van_gemert.png" alt="Pascal van Gemert" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br />
			<?= $profile->full_name; ?><br />
			<strong>Age:</strong><br />
			<?= $profile->date_of_birth; ?><br />
			<strong>Location:</strong><br />
			<?= $profile->current_location->city; ?>, <?= $profile->current_location->country; ?>, <?= $profile->current_location->planet; ?>
		</p>
	</div>
</div>