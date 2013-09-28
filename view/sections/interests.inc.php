<h2>Interests</h2>
<p class="lead">
	&ldquo;You can do anything you set your mind to.&rdquo;<br />- Benjamin Franklin
</p>

<hr />

<?php if(count($interests) > 0) { ?>

	<?php foreach($interests as $index => $interest) { ?>
	
<div class="row">
	<div class="col-md-4 <?= ($index % 2 == 0) ? 'left' : 'right'; ?>">
		<img src="<?= VIEW_PATH; ?>images/interests/<?= $interest->image; ?>" alt="<?= $interest->title; ?>" width="220" height="220" />
	</div>
	<div class="col-md-8 interest-content">
		<h3><?= $interest->title; ?></h3>
		<p>
			<?= $interest->description; ?>
		</p>
	</div>
</div>

	<?php } ?>
	
<?php } else { ?>
	
<div class="alert alert-warning">
	No interests were found in this resume
</div>

<?php } ?>