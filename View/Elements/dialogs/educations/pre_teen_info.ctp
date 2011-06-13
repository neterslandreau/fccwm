<?php
	$content = 'Curabitur quis dui at augue accumsan dapibus a facilisis ante. Cras at est enim. Praesent tempor odio et tortor tempor fringilla. Vivamus lacinia, ante quis cursus molestie, magna erat malesuada lectus, at egestas purus leo eget purus. Proin congue, turpis ac condimentum volutpat, erat dui suscipit nisl, et vehicula nisi nisl non quam. Aenean rutrum, arcu nec lacinia volutpat, orci magna sodales mauris, nec suscipit urna purus ac turpis. Nulla sed dolor est, eget commodo turpis. Donec id ante ligula. Nam facilisis ultrices ante sed vulputate. Maecenas ultrices enim sed lacus rhoncus vitae venenatis arcu tincidunt. Mauris blandit auctor magna quis hendrerit. Nullam nisl tellus, congue ut semper et, posuere eget diam. Aenean ultrices interdum condimentum. Nunc mattis mauris non erat convallis sit amet rhoncus eros pellentesque. Morbi vitae sagittis lacus. Etiam ac sagittis tortor. Aliquam enim dolor, accumsan in malesuada vitae, venenatis eget nisl. Pellentesque et sapien enim, pharetra feugiat dui. Sed ornare rutrum odio, nec lacinia orci luctus in. Sed vel mi leo.';
?>
<div id="pre-teen-info" style="display: none;">
	<h1 class="centered">First Christian Church of Wilton Manors Pre-Teen Education</h1>
	<?php
		echo $this->element('education/proverbs', array('verse' => '22_6'));
	?>
	<div class="grid_10 push_2">
		<?php
			echo $content;
		?>
	</div>
</div>
