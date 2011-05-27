<div id="sidemenu">
<?php
	if ($this->params['controller'] == 'educations') {
		echo $this->Html->link('Pre-School',
					array('action' => 'pre_school'),
					array(
						'onclick' => 'return false;',
						'id' => 'pre-school-sidebar'
					)
				);
		echo $this->Html->link('Pre-Teen',
					array('action' => 'pre_teen'),
					array(
						'onclick' => 'return false;',
						'id' => 'pre-teen-sidebar'
					)
				);
		echo $this->Html->link('Youth Studies',
					array('action' => 'youth'),
					array(
						'onclick' => 'return false;',
						'id' => 'youth-sidebar'
					)
				);
		echo $this->Html->link('Adult Studies',
					array('action' => 'adult'),
					array(
						'onclick' => 'return false;',
						'id' => 'adult-sidebar'
					)
				);
	} elseif ($this->params['controller'] == 'news') {
		echo $this->Html->link('Calendar', array('action' => 'google_calendar'));
//	} elseif ($this->params['plugin'] == 'full_calendar') {
//		echo '<div class="actions"><ul>';
//		echo $this->Html->link('<li>' . __('New Event', true) . '</li>',
//			array('plugin' => 'full_calendar', 'controller' => 'events', 'action' => 'add'),
//			array('escape' => false)
//		);
//		echo $this->Html->link('<li>' . __('Manage Events', true) . '</li>', 
//			array('plugin' => 'full_calendar', 'controller' => 'events'),
//			array('escape' => false)
//		);
//		echo $this->Html->link('<li>' . __('Manage Events Types', true) . '</li>', 
//			array('plugin' => 'full_calendar', 'controller' => 'event_types'),
//			array('escape' => false)
//		);
//		echo '</ul></div>';
	} elseif ($this->params['controller'] == 'abouts') {
		echo $this->Html->link(__('Our Beliefs', true),
				array('action' => 'beliefs'),
				array(
					'escape' => false,
					'onclick' => 'return false;',
					'id' => 'beliefs-sidebar'
				)
			);
		echo $this->Html->link(__('Our Staff', true),
				array('action' => 'staff'),
				array(
					'escape' => false,
					'onclick' => 'return false;',
					'id' => 'staff-sidebar',
				)
			);
		echo $this->Html->link(__('Our Pastor', true),
				array('action' => 'pastor'),
				array(
					'escape' => false,
					'onclick' => 'return false;',
					'id' => 'pastor-sidebar',
				)
			);
		echo $this->Html->link(__('Contact Us', true),
				array('action' => 'contact'),
				array(
					'escape' => false,
					'onclick' => 'return false;',
					'id' => 'contact-sidebar',
				)
			);
	} else {
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'one', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'two', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'three', '#') . '</div>';
//		echo '<div>' . $this->Html->link($this->params['controller'] . '_' . 'four', '#') . '</div>';
	}
?>
</div>
