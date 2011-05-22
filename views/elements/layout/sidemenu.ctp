<div id="sidemenu">
<?php
	if ($this->params['controller'] == 'educations') {
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'one', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'two', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'three', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'four', '#') . '</div>';
	} else {
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'one', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'two', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'three', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'four', '#') . '</div>';
	}
?>
</div>
