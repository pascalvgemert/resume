<h2>Experiences</h2>
<p class="lead">
	&ldquo;
We shall not cease from exploration and the end of all our exploring<br />
Will be to arrive where we started and know the place for the first time.&rdquo;<br />
- T.S. Eliot, Four Quartets 
</p>

<hr />

<h3>Educations</h3>

<?php if(count($educations) > 0) { ?>

<div class="experiences">

	<?php foreach($educations as $index => $education) { ?>
				
	<div class="experience row">
		<div class="col-md-4">
			<h4><?= $education->title; ?></h4>
			<p class="experience-period">
				<?= date('M Y', strtotime($education->start_date)); ?>
				- 
				<?= (@isset($education->end_date)) ? date('M Y', strtotime($education->end_date)) : 'current'; ?>&nbsp;
				<?= ($education->completed == 'true') ? '' : '(expected)'; ?>
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong><?= $education->level; ?> - <?= $education->specification; ?></strong>
				<span class="hidden-phone">
					<?= $education->description; ?>
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						<?= $education->location; ?>
					</span>
				</span>
			</p>
		</div>
	</div>
	
	<?php } ?>

</div>
	
<?php } else { ?>
	
<div class="alert alert-warning">
	No educations were found in this resume
</div>

<?php } ?>
	

<hr />

<h3>Careers</h3>

<?php if(count($careers) > 0) { ?>

<div class="experiences">

	<?php foreach($careers as $index => $career) { ?>
				
	<div class="experience row">
		<div class="col-md-4">
			<h4><?= $career->title; ?></h4>
			<p class="experience-period">
				<?= date('M Y', strtotime($career->start_date)); ?>
				- 
				<?= (@isset($career->end_date)) ? date('M Y', strtotime($career->end_date)) : 'current'; ?>
			</p>
		</div>
		<div class="col-md-8">
			<p>
				<strong><?= $career->level; ?> - <?= $career->specification; ?></strong>
				<span class="hidden-phone">
					<?= $career->description; ?>
				        <?php if(@isset($career->tech)) { ?>
                                           <br /><b>Technologies: </b><?= $career->tech; ?>
				        <?php } ?>
				</span>
				<span class="experience-details">
					<span class="location">
						<span class="glyphicon glyphicon-map-marker"></span>
						<?= $career->location; ?>
					</span>
					
					<?php if(@isset($career->link)) { ?>
					
					<span class="seperator">|</span>
					<span class="link">
						<span class="glyphicon glyphicon-link"></span>
						<a href="<?= $career->link; ?>" target="_blank"><?= $career->link; ?></a>
					</span>
					
					<?php } ?>
					
				</span>
			</p>
		</div>
	</div>
	
	<?php } ?>

</div>
	
<?php } else { ?>
	
<div class="alert alert-warning">
	No careers were found in this resume
</div>
	
<?php } ?>
