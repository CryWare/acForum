<?php
/**
 * acForum (http://github.com/achtachtel/acForum/)
 *
 * @copyright Copyright 2013 Marcel Brand, Patric Mahler
 * @license GPLv3 http://gnu.org/licenses/gpl.html
 * @package acForum
 */

return array(
	'router' => array(
		'routes' => array(
			'forum' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/forum',
					'defaults' => array(
						'controller' => 'acForum\Controller\Index',
						'action' => 'index',
					),
				),
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			'acForum\Controller\Index' => 'acForum\Controller\IndexController',
		),
	),
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view'
		),
	),
);