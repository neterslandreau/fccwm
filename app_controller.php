<?php
class AppController extends Controller {
    public $components = array(
		'Session',
		'Auth',
		'Cookie',
		'Email',
		'RequestHandler',
		'Search.Prg'
	);
	public $helpers = array(
		'Session',
		'Html',
		'Javascript',
		'Form',
		'Xml',
		'Text'
	);
	public $publicControllers = array('pages');

/**
 * Object constructor - Adds the Debugkit panel if in development mode
 *
 * @return void
 */
	public function __construct() {
		if (Configure::read('debug')) {
			$this->components[] = 'DebugKit.Toolbar';
		}
		parent::__construct();
	}

	public function beforeFilter() {
		$prefixes = Configure::read('Routing.prefixes');
		$admin = in_array('admin', $prefixes);
		$this->Auth->loginAction = array('plugin' => 'users', 'controller' => 'users', 'action' => 'login', 'admin' => false);
//		$this->Auth->loginAction = '/users/login';
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginError = __('Invalid username / password combination.  Please try again', true);
		$this->Auth->autoRedirect = false;
		$this->Auth->authorize = 'controller';
		$this->Auth->fields = array('username' => 'email', 'password' => 'passwd');

		$this->Cookie->name = 'fccwmRememberMe';
		$this->Cookie->time = '1 Month';
		$cookie = $this->Cookie->read('User');

		if (!empty($cookie) && !$this->Auth->user()) {
			$data['User']['email'] = '';
			$data['User']['passwd'] = '';
			if (is_array($cookie)) {
				$data['User']['email'] = $cookie['email'];
				$data['User']['passwd'] = $cookie['passwd'];
			}
			if (!$this->Auth->login($data)) {
				$this->Cookie->destroy();
				$this->Auth->logout();
			}
		}
		if ($this->Auth->user()) {
			$this->set('userData', $this->Auth->user());
		}

		if (in_array(strtolower($this->params['controller']), $this->publicControllers)) {
            $this->Auth->allow('*');
        }
	}

	public function isAuthorized() {
		if ($this->Auth->user()) {
			return true;
		}
		return false;
	}

}
