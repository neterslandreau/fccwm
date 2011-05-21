<?php
class MinistriesController extends AppController {
	public $name = 'Ministries';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

}
?>
