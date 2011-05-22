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
//			echo $this->Html->image('spacer.gif', array('width' => 700, 'height' => 80, 'alt' => _('First Christian Church of Wilton Manors'), 'title' => _('First Christian Church of Wilton Manors')));
		?>
<!--		<h1>
		First Christian Church of Wilton Manors
		</h1>-->
	</div>
	<div class="grid_2">
<!--			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="PH72T5MQF4HRQ">
			<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>-->
		<?php 
			echo $this->Html->link(
				$this->Html->image('cross1.png', array('width' => 100)),
				'/',
				array('escape' => false)
			);
//			echo $this->Html->link('Donate',
//				'#',
//				array(
//					'onclick' => 'return false;',
//					'id' => 'donate'
//				)
//			); 
		?>
	</div>
</div>
