<?php
class DonationsController extends AppController {
	public $name = 'Donations';
	public $uses = null;
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	
	public function donate() {
		if ($this->RequestHandler->isAjax()) {
			$this->view = 'Json';
			$json = array(
				'message' => 'Thank You',
				'redirect' => 'gracias'
			);
			$this->set(compact('json'));
		}
	}
}
?>