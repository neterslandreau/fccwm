<?php
	echo $this->Html->script('views/educations/index.js');
	$pre_school = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer interdum posuere nisi at pharetra. Nullam porttitor pulvinar enim tincidunt vehicula. Vestibulum id lacus urna, ac suscipit velit. Praesent quis dui ac ante dictum faucibus. Donec sed ante libero. Nam id elit a mi malesuada faucibus ac non mauris. Curabitur nisl magna, tincidunt et scelerisque eget, fermentum eu nunc. Curabitur ut ipsum at erat convallis lobortis. Pellentesque et urna eu justo mattis pretium eget nec urna. Donec pharetra, justo eget adipiscing condimentum, sapien lacus pellentesque est, in commodo lectus quam condimentum augue. Aliquam a viverra eros. Nunc nibh tortor, interdum eget aliquet nec, egestas sed tortor. Integer vel tortor at odio mattis placerat. Quisque sodales bibendum nulla in vulputate. Sed convallis tincidunt tellus.';
	$pre_teen = 'Curabitur quis dui at augue accumsan dapibus a facilisis ante. Cras at est enim. Praesent tempor odio et tortor tempor fringilla. Vivamus lacinia, ante quis cursus molestie, magna erat malesuada lectus, at egestas purus leo eget purus. Proin congue, turpis ac condimentum volutpat, erat dui suscipit nisl, et vehicula nisi nisl non quam. Aenean rutrum, arcu nec lacinia volutpat, orci magna sodales mauris, nec suscipit urna purus ac turpis. Nulla sed dolor est, eget commodo turpis. Donec id ante ligula. Nam facilisis ultrices ante sed vulputate. Maecenas ultrices enim sed lacus rhoncus vitae venenatis arcu tincidunt. Mauris blandit auctor magna quis hendrerit. Nullam nisl tellus, congue ut semper et, posuere eget diam. Aenean ultrices interdum condimentum. Nunc mattis mauris non erat convallis sit amet rhoncus eros pellentesque. Morbi vitae sagittis lacus. Etiam ac sagittis tortor. Aliquam enim dolor, accumsan in malesuada vitae, venenatis eget nisl. Pellentesque et sapien enim, pharetra feugiat dui. Sed ornare rutrum odio, nec lacinia orci luctus in. Sed vel mi leo.';
	$youth = 'Aliquam iaculis nibh non purus fringilla non tempor nunc fermentum. Nunc sollicitudin scelerisque nisi in blandit. Donec nunc leo, luctus quis iaculis eget, mollis eget sapien. Etiam lorem tellus, eleifend quis imperdiet ut, feugiat id leo. Etiam et nunc magna. Sed ac eros sem, vitae iaculis neque. Mauris quam massa, porta nec porta id, molestie in nunc. Ut id justo sit amet sem fermentum sodales. Pellentesque bibendum dolor ac nisi gravida dapibus. Aliquam erat volutpat. Morbi in semper ligula. Quisque gravida, sapien vitae condimentum dapibus, nulla sem ultrices magna, quis molestie tortor magna nec quam. Nullam consequat justo lacinia lorem interdum iaculis.';
	$adult = 'Quisque a elit eget sem rhoncus condimentum sit amet vel est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec non ultricies odio. Donec sed nulla nibh. Quisque ultricies consequat lectus, in lacinia quam imperdiet vel. Quisque sollicitudin justo eu orci accumsan dapibus cursus vulputate ligula. Nullam odio mauris, suscipit et sollicitudin vitae, tristique in purus. Suspendisse tincidunt cursus sem, at tristique erat commodo in. Vestibulum eu sem nec augue vestibulum laoreet nec ac ante. Pellentesque pulvinar sagittis vestibulum. In hac habitasse platea dictumst. Praesent eleifend sapien ut lorem viverra facilisis ultrices neque consequat. Donec commodo tincidunt tincidunt. Curabitur nunc lorem, luctus sit amet lacinia in, lacinia id diam. Nunc blandit magna eget ligula suscipit suscipit. Praesent mattis, diam sit amet dapibus rhoncus, nulla tellus tincidunt tellus, non sodales magna est id justo. Integer turpis nulla, consequat nec ullamcorper vitae, vehicula eget libero.';
?>
<h1 class="centered">First Christian Church of Wilton Manors Education Department</h1>
<!--
<p>
The whole idea behind Christian Ed. is to strengthen us in our faith and empower believers to reach out to the world with the reality of God's love. We can do this through many various ministries including our care ministry which includes hospital visits, phone calls, sending cards of encouragement etc.. other areas are our nurturing ministry, feed the needy, transportation, worship service preparation, Mens and womens fellowships, single parent support, various need sensitive bible studies, mission outreach committee (which supports worlwide missionaries) And many other vehicles through which we can reach out into our community and ultimately the world. We encourage singles through S.T.I.C., (Singles together In Christ) in fellowship and planned events and We also support and practice "Evangelism Explosion" which is a successful and effective witnessing tool .
</p>
<p>
We are an ever growing open minded body of believers who share the common goal of sharing God's love as revealed in Jesus. That God's tremendous plan for us and blessings He intends for us are available through the provision He has made in Jesus. And we are blessed with ever growing resources that enable us to effectively reach those around us and those around the world with God's Gospel of peace.
</p>
-->

<div class="grid_3">
	<h2 class="centered">Pre-School</h2>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 150, 'height' => 100));
			$link = $this->Html->link('more', 
					array('controller' => 'educations', 'action' => 'pre_school'),
					array(
						'onclick' => 'return false;',
						'id' => 'pre-school',
					)
				);
			echo $this->Text->truncate($pre_school, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3">
	<h2 class="centered">Pre-Teen</h2>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 150, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'educations', 'action' => 'pre_teen'),
					array(
						'onclick' => 'return false;',
						'id' => 'pre-teen',
					)
				);
			echo $this->Text->truncate($pre_teen, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3">
	<h2 class="centered">Youth Studies</h2>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 150, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'educations', 'action' => 'youth'),
					array(
						'onclick' => 'return false;',
						'id' => 'youth',
					)
				);
			echo $this->Text->truncate($youth, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div class="grid_3">
	<h2 class="centered">Adult Studies</h2>
	<p>
		<?php
			echo $this->Html->image('spacer2.gif', array('width' => 150, 'height' => 100));
			$link = $this->Html->link('more',
					array('controller' => 'educations', 'action' => 'adult'),
					array(
						'onclick' => 'return false;',
						'id' => 'adult',
					)
				);
			echo $this->Text->truncate($adult, 200, array(
				'exact' => false,
				'ending' => ' ... [' . $link . ']',
			));
		?>
	</p>
</div>
<div id="pre-school-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Pre-School Education</h1>
	<?php
		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $pre_school;
		?>
	</div>
</div>
<div id="pre-teen-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Pre-Teen Education</h1>
	<?php
		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $pre_teen;
		?>
	</div>
</div>
<div id="youth-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Youth Education</h1>
	<?php
		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $youth;
		?>
	</div>
</div>
<div id="adult-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Adult Education</h1>
	<?php
//		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $adult;
		?>
	</div>
</div>
