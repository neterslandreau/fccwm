<ul id="mycarousel" class="jcarousel-skin-fccwm">
	<?php for ($x = 1; $x <= 10; $x++) : ?>
	<li>
		<?php
			$pic = 'carousel/carousel' . $x . '.png';
			echo $this->Html->link(
				$this->Html->image($pic, array('width' => 375, 'height' => 140)),
				'#',
				array(
					'escape' => false,
					'onclick' => 'return false;'
				)
			);
		?>
	</li>
	<?php endfor; ?>
<!--
	<li>
		<img src="/img/carousel/carousel2.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel3.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel4.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel5.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel6.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel7.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel8.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel9.png" width="220" height="140" alt="" />
	</li>
	<li>
		<img src="/img/carousel/carousel10.png" width="220" height="140" alt="" />
	</li>
	-->
</ul>
