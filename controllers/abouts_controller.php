<?php
class AboutsController extends AppController {
	public $name = 'Abouts';
	public $uses = null;
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

}
?>
