<div id="sidemenu">
<?php
	if ($this->params['controller'] == 'educations') {
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'one', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'two', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'three', '#') . '</div>';
		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'four', '#') . '</div>';
	} elseif ($this->params['controller'] == 'news') {
		echo $this->Html->link('Calendar', array('action' => 'google_calendar'));
	} elseif ($this->params['plugin'] == 'full_calendar') {
		echo '<div class="actions"><ul>';
		echo $this->Html->link('<li>' . __('New Event', true) . '</li>',
			array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add'),
			array('escape' => false)
		);
		echo $this->Html->link('<li>' . __('Manage Events', true) . '</li>', 
			array('plugin' => 'full_calendar', 'controller' => 'events'),
			array('escape' => false)
		);
		echo $this->Html->link('<li>' . __('Manage Events Types', true) . '</li>', 
			array('plugin' => 'full_calendar', 'controller' => 'event_types'),
			array('escape' => false)
		);
		echo '</ul></div>';
	} elseif ($this->params['controller'] == 'abouts') {
		echo '<div>' . $this->Html->link(__('Our Beliefs', true), '#', array(
			'escape' => false,
		)) . '</div>';
		echo '<div>' . $this->Html->link(__('Staff', true), '#', array(
			'escape' => false
		)) . '</div>';
	} else {
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'one', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'two', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'three', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'four', '#') . '</div>';
	}
?>
</div>
