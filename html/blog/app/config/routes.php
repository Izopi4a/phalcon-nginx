<?php



$router = new \Phalcon\Mvc\Router();

//$router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

$router->notFound(array('controller' => 'index', 'action' => 'route404'));
 
$router->add('/register', array('controller' => 'signup', 'action' => 'register'));

$router->add('/', array('controller' => 'index', 'action' => 'index'));
 


return $router;