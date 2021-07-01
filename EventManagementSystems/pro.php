<?php


require_once 'classes/Connection.php';
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/UserTable.php';



extract($_POST);


$sql = "INSERT into contactus (name,title,message) VALUES('" . $name . "','" . $title . "','" . $message . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$conn->close();


?>