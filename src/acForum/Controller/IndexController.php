<?php
/**
 * acForum (http://github.com/achtachtel/acForum/)
 *
 * @copyright Copyright 2013 Marcel Brand, Patric Mahler
 * @license GPLv3 http://gnu.org/licenses/gpl.html
 * @package acForum
 */

namespace acForum\Controller;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$view = new ViewModel();
		return $view;
	}
}