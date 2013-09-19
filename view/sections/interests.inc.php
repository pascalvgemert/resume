<h2>Interests</h2>
<p class="lead">
	&#147;Another quote I haven't found yet.&#148;<br />- Someone
</p>

<hr />

<?php if(count($interests) > 0) { ?>

	<?php foreach($interests as $index => $interest) { ?>
	
<div class="row">
	<div class="col-md-4 <?= ($index % 2 == 0) ? 'left' : 'right'; ?>"><img src="<?= VIEW_PATH; ?>images/interests/<?= $interest->image; ?>" alt="<?= $interest->title; ?>" /></div>
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