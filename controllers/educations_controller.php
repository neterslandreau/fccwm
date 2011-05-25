<?php
class EducationsController extends AppController {
	public $name = 'Educations';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}

	public function index() {
		
	}

	public function pre_school() {
		
	}

	public function pre_teen() {
		
	}

	public function youth() {
		
	}

	public function adult() {
		
	}

}
?>
