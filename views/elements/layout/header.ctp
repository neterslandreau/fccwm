<div id="header">
	<div class="grid_2">
		<?php
			echo $this->Html->link(
				$this->Html->image('cross1.png', array('width' => 100)),
				'/',
				array('escape' => false)
			);
		?>
	</div>
	<div class="grid_12">
		<?php
			echo $this->Html->link(
				$this->Html->image('fccwm-logo.png', array('width' => 700, 'height' => 140, 'alt' => _('First Christian Church of Wilton Manors'))),
				'/',
				array('escape' => false)
			);
		?>
	</div>
	<div class="grid_2">
		<?php 
			echo $this->Html->link(
				$this->Html->image('cross1.png', array('width' => 100)),
				'/',
				array('escape' => false)
			);
//			echo $this->Html->link('Know God',
//				'#',
//				array(
//					'onclick' => 'return false;',
//					'id' => 'donate'
//				)
//			); 
		?>
	</div>
</div>
