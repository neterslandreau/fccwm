<?php
//	echo $this->Html->script('views/educations/index.js');
	$pre_school = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum posuere nisi at pharetra. Nullam porttitor pulvinar enim tincidunt vehicula. Vestibulum id lacus urna, ac suscipit velit. Praesent quis dui ac ante dictum faucibus. Donec sed ante libero. Nam id elit a mi malesuada faucibus ac non mauris. Curabitur nisl magna, tincidunt et scelerisque eget, fermentum eu nunc. Curabitur ut ipsum at erat convallis lobortis. Pellentesque et urna eu justo mattis pretium eget nec urna. Donec pharetra, justo eget adipiscing condimentum, sapien lacus pellentesque est, in commodo lectus quam condimentum augue. Aliquam a viverra eros. Nunc nibh tortor, interdum eget aliquet nec, egestas sed tortor. Integer vel tortor at odio mattis placerat. Quisque sodales bibendum nulla in vulputate. Sed convallis tincidunt tellus.';
	$pre_teen = 'Curabitur quis dui at augue accumsan dapibus a facilisis ante. Cras at est enim. Praesent tempor odio et tortor tempor fringilla. Vivamus lacinia, ante quis cursus molestie, magna erat malesuada lectus, at egestas purus leo eget purus. Proin congue, turpis ac condimentum volutpat, erat dui suscipit nisl, et vehicula nisi nisl non quam. Aenean rutrum, arcu nec lacinia volutpat, orci magna sodales mauris, nec suscipit urna purus ac turpis. Nulla sed dolor est, eget commodo turpis. Donec id ante ligula. Nam facilisis ultrices ante sed vulputate. Maecenas ultrices enim sed lacus rhoncus vitae venenatis arcu tincidunt. Mauris blandit auctor magna quis hendrerit. Nullam nisl tellus, congue ut semper et, posuere eget diam. Aenean ultrices interdum condimentum. Nunc mattis mauris non erat convallis sit amet rhoncus eros pellentesque. Morbi vitae sagittis lacus. Etiam ac sagittis tortor. Aliquam enim dolor, accumsan in malesuada vitae, venenatis eget nisl. Pellentesque et sapien enim, pharetra feugiat dui. Sed ornare rutrum odio, nec lacinia orci luctus in. Sed vel mi leo.';
	$youth = 'Aliquam iaculis nibh non purus fringilla non tempor nunc fermentum. Nunc sollicitudin scelerisque nisi in blandit. Donec nunc leo, luctus quis iaculis eget, mollis eget sapien. Etiam lorem tellus, eleifend quis imperdiet ut, feugiat id leo. Etiam et nunc magna. Sed ac eros sem, vitae iaculis neque. Mauris quam massa, porta nec porta id, molestie in nunc. Ut id justo sit amet sem fermentum sodales. Pellentesque bibendum dolor ac nisi gravida dapibus. Aliquam erat volutpat. Morbi in semper ligula. Quisque gravida, sapien vitae condimentum dapibus, nulla sem ultrices magna, quis molestie tortor magna nec quam. Nullam consequat justo lacinia lorem interdum iaculis.';
	$adult = 'Quisque a elit eget sem rhoncus condimentum sit amet vel est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non ultricies odio. Donec sed nulla nibh. Quisque ultricies consequat lectus, in lacinia quam imperdiet vel. Quisque sollicitudin justo eu orci accumsan dapibus cursus vulputate ligula. Nullam odio mauris, suscipit et sollicitudin vitae, tristique in purus. Suspendisse tincidunt cursus sem, at tristique erat commodo in. Vestibulum eu sem nec augue vestibulum laoreet nec ac ante. Pellentesque pulvinar sagittis vestibulum. In hac habitasse platea dictumst. Praesent eleifend sapien ut lorem viverra facilisis ultrices neque consequat. Donec commodo tincidunt tincidunt. Curabitur nunc lorem, luctus sit amet lacinia in, lacinia id diam. Nunc blandit magna eget ligula suscipit suscipit. Praesent mattis, diam sit amet dapibus rhoncus, nulla tellus tincidunt tellus, non sodales magna est id justo. Integer turpis nulla, consequat nec ullamcorper vitae, vehicula eget libero.';
?>
<h1 class="centered">About First Christian Church of Wilton Manors</h1>
<div class="grid_3 push_1">
	<?php
		echo $this->Html->link('<h2 class="centered">Our Beliefs</h2>',
			array('controller' => 'abouts', 'action' => 'beliefs'),
			array(
				'escape' => false,
				'onclick' => 'return false;',
				'id' => 'beliefs-header'
			)
		);
	?>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 160, 'height' => 100));
			$link = $this->Html->link('more', 
					array('controller' => 'abouts', 'action' => 'beliefs'),
					array(
						'onclick' => 'return false;',
						'id' => 'beliefs-content',
					)
				);
			echo $this->Text->truncate($pre_school, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3 push_1">
	<?php
		echo $this->Html->link('<h2 class="centered">Our Pastor</h2>',
			array('controller' => 'abouts', 'action' => 'pastor'),
			array(
				'escape' => false,
				'onclick' => 'return false;',
				'id' => 'pastor-header'
			)
		);
	?>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 160, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'abouts', 'action' => 'pastor'),
					array(
						'onclick' => 'return false;',
						'id' => 'pastor-content',
					)
				);
			echo $this->Text->truncate($pre_teen, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3 push_1">
	<?php
		echo $this->Html->link('<h2 class="centered">Our Staff</h2>',
			array('controller' => 'abouts', 'action' => 'staff'),
			array(
				'escape' => false,
				'onclick' => 'return false;',
				'id' => 'staff-header'
			)
		);
	?>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 160, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'abouts', 'action' => 'staff'),
					array(
						'onclick' => 'return false;',
						'id' => 'staff-content',
					)
				);
			echo $this->Text->truncate($youth, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3 push_1">
	<?php
		echo $this->Html->link('<h2 class="centered">Contact Us</h2>',
			array('controller' => 'abouts', 'action' => 'contact'),
			array(
				'escape' => false,
				'onclick' => 'return false;',
				'id' => 'contact-header'
			)
		);
	?>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 160, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'abouts', 'action' => 'content'),
					array(
						'onclick' => 'return false;',
						'id' => 'contact-content',
					)
				);
			echo $this->Text->truncate($adult, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>

