<?php
class NewsController extends AppController {
	public $name = 'News';
	public $uses = null;
	
	public function beforeFilter() {
		$this->Auth->allow('*');
	}
	public function index() {
		
	}

	public function google_calendar() {

	}

}
?>
