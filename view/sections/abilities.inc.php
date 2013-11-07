<h2>Abilities</h2>
<p class="lead">
	&ldquo;Life without knowledge is death in disguise.&rdquo;<br />- Talib Kweli
</p>

<hr />

<h3>Skills</h3>

<div class="row">

	<?php if(count($skills) > 0) { ?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($skills as $index => $skill) { ?>
		
			<li>
				<span class="ability-title"><?= $skill->title; ?></span>
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

<div class="text-center project-referal">
	<p>This project is build on a custom made PHP framework.</p>
	<a href="https://github.com/pascalvgemert/resume" class="btn btn-primary" target="_blank">See project on Github</a>
</div>

<hr />

<h3>Languages</h3>

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

<h3>Tools</h3>

<div class="row">
	<?php if(count($tools) > 0) { ?>
	
	<div class="col-md-6">
		<ul class="no-bullets">
		
		<?php foreach($tools as $index => $tool) { ?>
		
			<li>
				<span class="ability-title"><?= $tool->title; ?> (<?= $tool->endorsement; ?>)</span>
				<span class="ability-score">
				
				<?php for($stars = 1; $stars <= 5; $stars++) { ?>
				
					<span class="glyphicon glyphicon-star <?= ($tool->level >= $stars) ? 'filled' : ''; ?>"></span>
					
				<?php } ?>
					
				</span>
			</li>
			
			<?php if(ceil(count($tools) / 2) == $index + 1) { ?> 
			
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