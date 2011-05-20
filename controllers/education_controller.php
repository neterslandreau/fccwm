<?php
class EducationController extends AppController {
	public $name = 'Education';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

}
?>