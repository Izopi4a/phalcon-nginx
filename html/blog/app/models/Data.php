<?php

class Data extends \Phalcon\Mvc\Model
{


	


    public function indexAction	()
    {
		//$robot = users::findFirst(1);
        return "tesing Model";
    }
	
	public function test()
   {
      //print_r(\Phalcon\Di::getDefault()->getShared('db')); // This is the ugly way to grab the connection.

      $result=users::findFirst(1);
      echo $result->numRows();
      print_r($result->fetchAll());
   }

}

