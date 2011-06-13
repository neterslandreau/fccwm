<?php
class NewsController extends AppController {
	public $name = 'News';
	public $uses = null;
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('google_calendar', 'index');
	}
	public function index() {
		
	}

	public function google_calendar() {

	}

}
?>
