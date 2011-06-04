<ul id="mycarousel" class="jcarousel-skin-fccwm">
	<?php for ($x = 1; $x <= 10; $x++) : ?>
	<li>
		<?php
			$pic = 'carousel/carousel' . $x . '.png';
			echo $this->Html->link(
				$this->Html->image($pic, array('width' => 400, 'height' => 140)),
				'#',
				array(
					'escape' => false,
					'onclick' => 'return false;'
				)
			);
		?>
	</li>
	<?php endfor; ?>
</ul>
