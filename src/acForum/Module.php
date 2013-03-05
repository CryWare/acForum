<?php
/**
 * acForum (http://github.com/achtachtel/acForum/)
 *
 * @copyright Copyright 2013 Marcel Brand, Patric Mahler
 * @license GPLv3 http://gnu.org/licenses/gpl.html
 * @package acForum
 */

namespace acForum;

class Module
{
	public function getConfig()
	{
		return include __DIR__ . '/../../config/module.config.php';
	}
	
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/../' . __NAMESPACE__,
				),
			),
		);
	}
}