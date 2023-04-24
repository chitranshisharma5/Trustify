<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $conn = new mysqli('localhost','root','','project');
    
    if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
    }else {
        $stmt = $conn->prepare("insert into users (name,email,password,phone) values(?,?,?,?)");
        $stmt->bind_param("sssi", $name, $email, $password, $phone);
        $stmt->execute();
        echo "Registration Successfully....";
        $stmt->close();
        $conn->close();
    }
?>