<?php
namespace Main\Form;
use Zend\Form\Form;
class MainForm extends Form
{
	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct('Main');
		$this->setAttribute('method', 'post');
		    $this->add(array(
        		'name' => 'C0002_Sh_Ghabz',
        		'attributes' => array(
        				'type'  => 'text',
        		),
        		'options' => array(
        				'label' => 'شماره قبض',
        		),
        ));
        ///////////////////
        $this->add(array(
        		'name' => 'C0003_Section',
        		'attributes' => array(
        				'type'  => 'text',
        		),
        		'options' => array(
        				'label' => 'بخش مربوطه',
        		),
        ));
        /////////////////////
        $this->add(array(
        		'name' => 'submit',
        		'attributes' => array(
        				'type'  => 'submit',
        				'value' => 'submit',
        		),
        		'options' => array(
        				'label' => 'submit',
        		),
        ));
        ////////////////////
	}
}