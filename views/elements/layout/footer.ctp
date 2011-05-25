<div id="footer"> 
	<div class="container_16">
		<div class="grid_16">
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('Education', array('controller' => 'educations')); ?>
			</h1>
			<a href="#">link a1</a>
			<a href="#">link a2</a>
			<a href="#">link a3</a>
			<a href="#">link a4</a>
		</div>
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('News', array('controller' => 'news')); ?>
			</h1>
			<?php echo $this->Html->link('Calendar', array('controller' => 'news', 'action' => 'google_calendar')); ?>
			<a href="#">link b2</a>
			<a href="#">link b3</a>
			<a href="#">link b4</a>
		</div>
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('Messages', array('controller' => 'messages')); ?>
			</h1>
			<a href="#">link c1</a>
			<a href="#">link c2</a>
			<a href="#">link c3</a>
			<a href="#">link c4</a>
		</div>
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('Ministries', array('controller' => 'ministries')); ?>
			</h1>
			<a href="#">link d1</a>
			<a href="#">link d2</a>
			<a href="#">link d3</a>
			<a href="#">link d4</a>
		</div>
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('About Us', array('controller' => 'abouts')); ?>
			</h1>
			<a href="#">link e1</a>
			<a href="#">link e2</a>
			<a href="#">link e3</a>
			<a href="#">link e4</a>
			<?php 
				echo $this->Html->link('<h1>' . 'Donate' . '</h1>', '#', array(
					'id' => 'donate',
					'onclick' => 'return false;',
					'escape' => false,
				));
			?>
		</div>
	</div>
		<div class="grid_8 push_4">
			&copy;2002 - <?php echo date('Y'); ?> First Christian Church of Wilton Manors
		</div>
	</div>
</div>
