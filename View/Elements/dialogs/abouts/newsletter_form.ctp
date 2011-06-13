<?php
	echo $this->Form->create(null, array(
		'url' => 'http://fccwm.us2.list-manage.com/subscribe/post?u=66f03ba43600ea2123fefe17f&amp;id=7471cd7a54',
		'id' => 'mc-embedded-subscribe-form',
		'name' => 'mc-embedded-subscribe-form',
		'class' => 'validate',
		'target' => '_blank',
	));
?>
	<fieldset>
	<div class="indicate-required">* indicates required field</div>
		<div class="mc-field-group">
		<?php
			echo $this->Form->input('EMAIL', array(
				'label' => 'E-mail Address <strong class="note-required">*</strong>',
				'class' => 'required email',
				'name' => 'EMAIL',
				'id' => 'mce-EMAIL'
			));
		?>
		</div>
		<div class="mc-field-group">
		<?php
			echo $this->Form->input('FNAME', array(
				'label' => 'First Name',
				'name' => 'FNAME',
				'id' => 'mce-FNAME',
			));
		?>
		</div>
		<div class="mc-field-group">
		<?php
			echo $this->Form->input('LNAME', array(
				'label' => 'Last Name',
				'name' => 'LNAME',
				'id' => 'mce-LNAME',
			));
		?>
		</div>
		<div class="mc-field-group telephone">
			<div>
				Telephone
			</div>
		<?php
			echo $this->Form->input('PHONE.area', array(
				'name' => 'PHONE[area]',
				'id' => 'mce-PHONE-area',
				'size' => 3,
				'label' => '',
				'after' => '-',
			));
		?>
		<?php
			echo $this->Form->input('PHONE.detail1', array(
				'name' => 'PHONE[detail1]',
				'id' => 'mce-PHONE-detail1',
				'size' => 3,
				'label' => '',
				'after' => '-',
			));
		?>
		<?php
			echo $this->Form->input('PHONE.detail2', array(
				'name' => 'PHONE[detail2]',
				'id' => 'mce-PHONE-detail2',
				'size' => 3,
				'label' => '',
			));
		?>
		</div>
		<div class="clear"></div>
		<div id="mce-responses">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>
	</fieldset>
<?php
	echo $this->Form->end('Subscribe');
?>