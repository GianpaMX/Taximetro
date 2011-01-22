<?php

class IndexController extends Zend_Controller_Action {
    public function init() {
    	$this->_helper->contextSwitch()->addContext('iphone', array(
    		'suffix' => 'iphone',
    		'headers' => array('Content-Type' => 'text/html')
    	));
    	$this->_helper->contextSwitch()->addActionContext('index', true);
    	$this->_helper->contextSwitch()->initContext();
    }

    public function indexAction() {
    	$this->view->assign('title', 'Taxímetro');
    }
    
    public function startAction() {
    	$this->_helper->viewRenderer->setNoRender();
    	$this->_helper->redirector->gotoSimple('map');
    }
    
    public function mapAction() {
    	$this->view->title = "Mapa";
    }
}

