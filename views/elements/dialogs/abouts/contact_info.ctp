<?php
	$content = 'Aliquam iaculis nibh non purus fringilla non tempor nunc fermentum. Nunc sollicitudin scelerisque nisi in blandit. Donec nunc leo, luctus quis iaculis eget, mollis eget sapien. Etiam lorem tellus, eleifend quis imperdiet ut, feugiat id leo. Etiam et nunc magna. Sed ac eros sem, vitae iaculis neque. Mauris quam massa, porta nec porta id, molestie in nunc. Ut id justo sit amet sem fermentum sodales. Pellentesque bibendum dolor ac nisi gravida dapibus. Aliquam erat volutpat. Morbi in semper ligula.';
?>
<div id="contact-info" style="display: none;">
	<h1 class="centered">Contact First Christian Church of Wilton Manors</h1>
	<div class="grid_10 push_2">
		<?php
			echo $this->Form->create();
			echo $this->Form->input('name');
			echo $this->Form->input('email');
			echo $this->Form->input('comment', array('type' => 'textarea'));
			echo $this->Form->end();
			echo $content;
		?>
	</div>
</div>
