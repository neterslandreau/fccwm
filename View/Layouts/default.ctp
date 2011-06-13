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
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
		echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');
		echo $this->Html->script('jquery.jcarousel.min.js');
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js');
		echo $this->Html->script('jquery.form');
		echo $this->Html->script('views/layouts/default.js');
		echo $scripts_for_layout;
	?>
	<meta name="google-site-verification" content="F-VJZzngvH7HeD3P9ZwcQFktipGLJDMqHvVixQ0rspc" />
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
		<?php
			echo $this->Session->flash();
			echo $this->Session->flash('auth');
		?>
		<?php echo $content_for_layout; ?>
		</div>
	</div>
	<?php else: ?>
	<div class="grid_16">
		<div id="content">
		<?php
			echo $this->Session->flash();
			echo $this->Session->flash('auth');
		?>
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
	<?php
		echo $this->Form->create('Donation', array('action' => 'donate'));
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->submit();
		echo $this->Form->end();
	?>
</div>
<div id="nl-form-container" style="display: none;">
	<?php
		echo $this->element('dialogs/abouts/newsletter_container');
	?>
</div>
<?php
	echo $this->element('dialogs/educations/pre_school_info');
	echo $this->element('dialogs/educations/pre_teen_info');
	echo $this->element('dialogs/educations/youth_info');
	echo $this->element('dialogs/educations/adult_info');
	echo $this->element('dialogs/abouts/beliefs_info');
	echo $this->element('dialogs/abouts/pastor_info');
	echo $this->element('dialogs/abouts/staff_info');
	echo $this->element('dialogs/abouts/contact_info');
?>
<?php //echo $this->Js->writeBuffer(); ?>
</body>
</html>