<div id="footer"> 
	<div class="container_16">
		<div class="grid_16">
		<div class="grid_3">
			<h1>
				<?php echo $this->Html->link('Education', array('controller' => 'educations')); ?>
			</h1>
			<?php
				echo $this->Html->link('Pre-School',
						array('controller' => 'educations', 'action' => 'pre_school'),
						array(
							'onclick' => 'return false;',
							'id' => 'pre-school-footer'
						)
					);
				echo $this->Html->link('Pre-Teen',
						array('controller' => 'educations', 'action' => 'pre_teen'),
						array(
							'onclick' => 'return false;',
							'id' => 'pre-teen-footer',
						)
					);
				echo $this->Html->link('Youth Studies',
						array('controller' => 'educations', 'action' => 'youth'),
						array(
							'onclick' => 'return false;',
							'id' => 'youth-footer'
						)
					);
				echo $this->Html->link('Adult Studies',
						array('controller' => 'educations', 'action' => 'adult'),
						array(
							'onclick' => 'return false;',
							'id' => 'adult-footer'
						)
					);
			?>
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
			<?php
				echo $this->Html->link('Our Beliefs',
						array('controller' => 'abouts', 'action' => 'beliefs'),
						array(
							'onclick' => 'return false;',
							'id' => 'beliefs-footer'
						)
					);
				echo $this->Html->link('Our Pastor',
						array('controller' => 'abouts', 'action' => 'pastor'),
						array(
							'onclick' => 'return false;',
							'id' => 'pastor-footer',
						)
					);
				echo $this->Html->link('Our Staff',
						array('controller' => 'abouts', 'action' => 'youth'),
						array(
							'onclick' => 'return false;',
							'id' => 'staff-footer'
						)
					);
				echo $this->Html->link('Contact Us',
						array('controller' => 'abouts', 'action' => 'contact'),
						array(
							'onclick' => 'return false;',
							'id' => 'contact-footer'
						)
					);
			?>
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
