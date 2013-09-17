<div id="abilities" class="container">
	<h2>Abilities</h2>
	<p class="lead">
		&#147;Life without knowledge is a death in disguise.&#148;<br />- Talib Kweli
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
	
	<hr />
	
	<h3>Languages</h3>
	
	<div class="row">
		<div class="col-md-6">
			<ul class="no-bullets">
				<li>
					<span class="ability-title">Dutch (mother tongue)</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">English (daily use)</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="no-bullets">
				<li>
					<span class="ability-title">German</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">French</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
			</ul>
		</div>
	</div>
	
	<hr />
	
	<h3>Tools</h3>
	
	<div class="row">
		<div class="col-md-6">
			<ul class="no-bullets">
				<li>
					<span class="ability-title">Notepad++</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">Coda</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">Sublime Text</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">TextWrangler</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
			</ul>
		</div>
		<div class="col-md-6">
			<ul class="no-bullets">
				<li>
					<span class="ability-title">Windows</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">Mac OS</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
				<li>
					<span class="ability-title">All browsers</span>
					<span class="ability-score">
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star filled"></span>
						<span class="glyphicon glyphicon-star"></span>
					</span>
				</li>
			</ul>
		</div>
	</div>
</div>