<?php

class DataController extends \Phalcon\Mvc\Controller {
	
public function indexAction()
    {
		echo "<h1>Hello World.. Testing Inside Index!</h1>";
    }

public function showAction($val){
		echo "<h1>Hello World!{$val}</h1>";
    }
	
public function saveAction(){
		$Data = new Data();
		
		$success = $Data->test();	
	}		

}

?>