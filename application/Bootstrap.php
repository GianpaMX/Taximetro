<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {
	protected function _initDoctype() {
		$this->bootstrap('view');
		$view = $this->getResource('view');
		$view->doctype('XHTML1_STRICT');
	}
	protected function _initViewHelpers() {
		$front  = Zend_Controller_Front::getInstance();
		$router = $front->getRouter();
		$router->addRoute('iphone', new Zend_Controller_Router_Route('iphone/:module/:controller/:action/*', array(
				'format'	=> 'iphone',
				'module'	=> 'default',
				'controller'=> 'index',
				'action'    => 'index'
			))
		);
	}
}
