<h2>Projects</h2>
<p class="lead">
	&ldquo;You can do anything you set your mind to.&rdquo;<br />- Benjamin Franklin
</p>

<hr />

<?php if(count($projects) > 0) { ?>

<div class="row">

	<?php foreach($projects as $index => $project) { ?>
	
	<div class="col-md-6 col-sm-12 col-xs-12">
		<figure class="effect">
			<img src="<?= VIEW_PATH.'images/'.$project->image; ?>" alt="<?= $project->title; ?>" />
			
			<figcaption>
				<h3><?= $project->title; ?></h3>
				<p><?= $project->description; ?></p>
				<p><strong>Tags:</strong> <br /><?= $project->tags; ?></p>
				<a href="<?= $project->link; ?>" target="_blank">View more</a>
				<span class="icon">
					<span class="glyphicon glyphicon-new-window"></span>
				</span>
			</figcaption> 
		</figure>
	</div>

	<?php } ?>
	
</div>
	
<?php } else { ?>
	
<div class="container">	
	<div class="alert alert-warning">
		No projects were found in this resume
	</div>
</div>

<?php } ?>