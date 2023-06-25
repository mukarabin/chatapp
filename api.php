<?php

require_once("classes/autoload.php");

$DB = new Database();

$data = file_get_contents("php://input");
$myobject = json_decode($data);



//json_decode(json) = JSON.parse()
//json_encode(value) = JSON.strinfigy()

//$myobject = (array)$myobject;
//$myobject = (object)$myobject;

//echo$myobject->gender;

//die;
//echo "<pre>";
//print_r($myobject);
//echo "<pre>";