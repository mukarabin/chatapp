<?php

require_once("classes/autoload.php");

$DB = new Database();

$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);

//process the data
if (isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type == "signup") {

    //signup
    $data = false;
    $data['userid'] = $DB->generate_id(20);
    $data['username'] = $DATA_OBJ->username;
    $data['email'] = $DATA_OBJ->email;
    $data['password'] = $DATA_OBJ->password;
    $data['date'] = $DATA_OBJ->date("Y-m-d H:i:s");

    $query =  "insert into users (userid,username,email,password,date) values (:userid,:username,:email,:password,:date)";
    $result = $DB->write($query, $data);

    if ($result) {
        echo "Your profile was created";
    } else {
        echo "Your profile was NOT created";
    }
}

//json_decode(json) = JSON.parse()
//json_encode(value) = JSON.strinfigy()

//$myobject = (array)$myobject;
//$myobject = (object)$myobject;

//echo$myobject->gender;

//die;
//echo "<pre>";
//print_r($myobject);
//echo "<pre>";