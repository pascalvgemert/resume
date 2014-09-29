<h2>Abilities</h2>
<p class="lead">
	&ldquo;Success means we go to sleep at night knowing that our<br />talents and ablities were used in a way that served others.&rdquo;<br />- Marianne Williamson
</p>

<hr />

<h3>Broad Skills</h3>

<div class="row">

	<?php if(count($skills) > 0) { ?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($skills as $index => $skill) { ?>
		
			<li>
				<span class="ability-title"><?= $skill->title; ?> (<?= $skill->endorsement; ?>)</span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($skill->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($skills) / 2) == $index + 1) { ?> 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
			<?php } ?>
		
		<?php } ?>
		
		</ul>
	</div>
	
	<?php } else { ?>
	
	<div class="alert alert-warning">
		No skills were found in this resume
	</div>
	
	<?php } ?>
	
</div>

<hr />

<h3>Specific Skills and Technologies</h3>

<div class="row">

	<?php if(count($languages) > 0) { ?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($languages as $index => $language) { ?>
		
			<li>
				<span class="ability-title"><?= $language->title; ?> (<?= $language->endorsement; ?>)</span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($language->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($languages) / 2) == $index + 1) { ?> 
			
		</ul>
	</div>
	<div class="col-md-6">
		<ul class="no-bullets">
			
			<?php } ?>
		
		<?php } ?>
		
		</ul>
	</div>
	
	<?php } else { ?>
	
	<div class="alert alert-warning">
		No languages were found in this resume
	</div>
	
	<?php } ?>
	
</div>

<hr />
