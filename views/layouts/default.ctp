<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('First Christian Church of Wilton Manors:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
//			'cake.generic',
			'reset',
			'text',
			'960',
			'jquery-ui',
			'carousel/fccwm/skin',
			'fccwm'
		));
		echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');
		echo $this->Html->script('jquery.jcarousel.min.js');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
		echo $this->Html->script('views/layouts/default.js');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<?php //debug($this->params); ?>
<!--
	<div class="background">
		<img src="/img/congr1.jpg" />
	</div>
-->
	<div class="wrapper">
	<div class="container_16">
		<?php
			echo $this->element('layout/header');
		?>
	<div class="clear"></div>
		<?php
			echo $this->element('layout/navigation');
		?>
	<div class="clear"></div>
	<?php if (($this->params['controller'] == 'pages') && ($this->params['pass'][0] != 'home')) : ?>
	<div class="grid_2">
		<?php
			echo $this->element('layout/sidemenu');
		?>
	</div>
	<div class="grid_14">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
	<?php elseif ($this->params['controller'] != 'pages') : ?>
	<div class="grid_2">
		<?php
			echo $this->element('layout/sidemenu');
		?>
	</div>
	<div class="grid_14">
		<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
		</div>
	</div>
	<?php else: ?>
	<div class="grid_16">
		<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="clear"></div>
	<?php echo $this->element('layout/footer'); ?>
	<div class="clear"></div>
	</div>
	</div>
<?php
//	echo $this->Html->script('jquery.tools.min.js');
//	echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');
//	echo $this->Html->script('jquery.jcarousel.min.js');
//	echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
//	echo $this->Html->script('views/layouts/default.js');
//	echo $scripts_for_layout;
?>
<div id="donate-form" style="display:none;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="PH72T5MQF4HRQ">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
	<?php
//		echo $this->Form->create('Donation', array('action' => 'add'));
//		echo $this->Form->input('firstname');
//		echo $this->Form->input('lastname');
//		echo $this->Form->input('address1');
//		echo $this->Form->input('address2');
//		echo $this->Form->end();
	?>
</div>
</body>
</html>