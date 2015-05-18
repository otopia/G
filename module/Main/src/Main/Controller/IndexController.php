<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Main for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Main\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Main\Form\MainForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$mainform = new MainForm();
    	return array('mainform' => $mainform);
    }
    
    public function confirmAction()
    {
    $request = $this->getRequest();
	if ($request->isPost()) {
	return array('TaskOK'=>'OK');	
		
	}
	else 
	{
		return array('TaskOK'=>'Error');
		
	}
    	
    	
    }
    

   
}
