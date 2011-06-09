<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
	Router::parseExtensions('json', 'xml');
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/news/:action/*', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/about/:action/*', array('controller' => 'abouts', 'action' => 'index'));
	Router::connect('/education/:action/*', array('controller' => 'educations', 'action' => 'index'));
//	Router::connect('/users/:controller/:action/*', array('plugin' => 'users', 'controller' => 'users', 'action' => 'index'));
	Router::connect('/testing', array('controller' => 'pages', 'action' => 'display', 'testing'));

/**
 * Routes for the AppUsers extensions of Users plugin. app_users isn't as pretty as users
 */
//	Router::connect('/users/users/reset_password/*', array('plugin' => null, 'controller' => 'app_users', 'action' => 'reset_password'));
	Router::connect('/users', array('plugin' => null, 'controller' => 'app_users'));
	Router::connect('/users/:action/*', array('plugin' => null, 'controller' => 'app_users', 'action' => 'index'));
//	Router::connect('/users/users/*', array('plugin' => null, 'controller' => 'app_users'));
//	Router::connect('/users/users/:action/*', array('plugin' => null, 'controller' => 'app_users'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
