<?php
class EducationsController extends AppController {
	public $name = 'Educations';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

}
?>
