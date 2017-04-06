<?php

class SignupController extends \Phalcon\Mvc\Controller {
	
	public function indexAction() {
		
	}	
	
	public function registerAction() {
		echo "registeration"; exit;
		$users = new Users();
		$connection = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
    		"host" => "localhost",
    			"username" => "root",
    			"password" => "",
   		 "dbname" => "store"
		));
		
		
		//$success = $users->save($this->request->getPost(),array('name','email'));
		$success = true;
		if($success) {
			echo "Thanks for registerign";	
			$m = $users::findFirst(2);
			$c = $m->name . "<br />";
			$c .= $m->email;
			print_r($c);
			
			/*$sql = "select * from users";
			$rs = $connection->query($sql);
			
			while($user = $rs->fetch()){
				echo $user["name"] . "<br />";
			}*/
			$session = new Phalcon\Session\Adapter\Files(array(
    			'uniqueId' => 'my-private-app'
 			));

					// Check Whether session is started or not
			//var_dump($session->isStarted()); 
 			if(!$session->isStarted()) {
				$session->start();
			}
			$session->set('var', 'some-value');

 			echo $session->get('aa') == "" ? "<br /> Sesion not Found" : $session->get('aa');
			
			$rs = $connection->query("Select * from users where ID = 2");
			$r = $rs->fetch();
			echo "<br />" . $r["name"] . " Email: " . $r["email"];
			//print_r($connection->fetchOne("select * from users"));
		}else{
			echo "Sorry..!! Registration Failed...!";
			foreach($users->getMessages() as $msg){
				echo $msg->getMessage(), "<br />";
			}	
		}
		
	}

}

?>