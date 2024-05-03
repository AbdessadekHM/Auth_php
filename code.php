<?php
session_start();
include('utils/db.php');
$table = 'users';
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = [
        'name'=>$name,
        'phone' => $phone,
        'email' => $email,
        'password' => $password
    ];
    $conn = new DB($info);
    $result = $conn->Read($table,"email = '$email' LIMIT 1");
    echo count($result);
    if(count($result)){
        echo 'this email is already registered';
        $_SESSION['message'] = 'This email is used for an existing account';
        header('Location: register.php');
    }else{
        $conn->Create($table,$data);
        $_SESSION['message'] = 'registered successfully';
        header('Location: logIn.php');
    }
}