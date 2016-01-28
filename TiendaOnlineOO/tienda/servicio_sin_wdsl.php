<?php

require_once('include/DB.php');

$uri="http://localhost/server_soap";

$server = new SoapServer(null, array('uri'=>''));


$server->setClass('BD');
$server->handle();


?>
