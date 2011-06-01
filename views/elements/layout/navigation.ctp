<div id="navigation">
	<div class="grid_6">
		<h1>
		<?php
			echo $this->Html->link('First Christian Church of Wilton Manors',
				array(
					'controller' => 'pages', 'action' => 'display', 'home'
				), 
				array(
					'title' => 'First Christian Church of Wilton Manors',
			));
		?>
		</h1>
	</div>
	<div class="grid_2">
		<?php
			echo $this->Html->link('News',
				array(
					'controller' => 'news', 'action' => 'index',
				), 
				array(
				'title' => 'First Christian Church of Wilton Manors News and Events',
				'alt' => 'First Christian Church of Wilton Manors News and Events',
			));
		?>
	</div>
	<div class="grid_2">
		<?php
			echo $this->Html->link('Education',
				array(
					'controller' => 'educations', 'action' => 'index',
				),
				array(
					'title' => 'First Christian Church of Wilton Manors Educational Programs',
					'alt' => 'First Christian Church of Wilton Manors Educational Programs',
			));
		?>
	</div>
	<div class="grid_2">
		<?php
			echo $this->Html->link('Messages',
				array(
					'controller' => 'messages', 'action' => 'index',
				),
				array(
				'title' => 'First Christian Church of Wilton Manors Teachings',
				'alt' => 'First Christian Church of Wilton Manors Teachings',
			));
		?>
	</div>
	<div class="grid_2">
		<?php
			echo $this->Html->link('Ministries',
				array(
					'controller' => 'ministries', 'action' => 'index',
				), 
				array(
					'title' => 'First Christian Church of Wilton Manors Ministries',
					'alt' => 'First Christian Church of Wilton Manors Ministries',
			));
		?>
	</div>
	<div class="grid_2">
		<?php
			echo $this->Html->link('About Us',
				array(
					'controller' => 'abouts', 'action' => 'index',
				),
				array(
					'title' => 'About First Christian Church of Wilton Manors and what we believe',
					'alt' => 'About First Christian Church of Wilton Manors and what we believe',
			));
		?>
	</div>
</div>
