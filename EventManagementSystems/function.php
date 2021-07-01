<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // Database Connection
 
    $conn = new mysqli  ('localhost', 'root','','year2project');
    if ($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration (name, email, message) values (?,?,?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        echo "SENT SUCCESSFULLY";
        $stmt->close();
        $conn->close();
    }

?>