<?php
	$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum posuere nisi at pharetra. Nullam porttitor pulvinar enim tincidunt vehicula. Vestibulum id lacus urna, ac suscipit velit. Praesent quis dui ac ante dictum faucibus. Donec sed ante libero. Nam id elit a mi malesuada faucibus ac non mauris. Curabitur nisl magna, tincidunt et scelerisque eget, fermentum eu nunc. Curabitur ut ipsum at erat convallis lobortis. Pellentesque et urna eu justo mattis pretium eget nec urna. Donec pharetra, justo eget adipiscing condimentum, sapien lacus pellentesque est, in commodo lectus quam condimentum augue. Aliquam a viverra eros. Nunc nibh tortor, interdum eget aliquet nec, egestas sed tortor. Integer vel tortor at odio mattis placerat. Quisque sodales bibendum nulla in vulputate. Sed convallis tincidunt tellus.';
?>
<div id="pre-school-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Pre-School Education</h1>
	<?php
		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $content;
		?>
	</div>
</div>
