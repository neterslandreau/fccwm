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
			'fccwm'
		));
	?>
</head>
<body>
	<?php //debug($this->params); ?>
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
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
	<?php else: ?>
	<div class="grid_16">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
	<?php endif; ?>
	<div class="clear"></div>
<!--		<div class="grid_8">-->
		<div class="grid_8 push_12">
			<?php
				echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '1')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
<?php
	echo $this->Html->script('jquery.tools.min.js');
	echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
	echo $this->Html->script('views/layouts/default.js');
	echo $scripts_for_layout;
?>
<div id="donate-form" style="display:none;">
	hello there!
</div>
</body>
</html>