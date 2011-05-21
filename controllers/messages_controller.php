<?php
class MessagesController extends AppController {
	public $name = 'Messages';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

}
?>
