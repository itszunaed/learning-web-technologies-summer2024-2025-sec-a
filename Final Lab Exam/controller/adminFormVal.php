<?php
    session_start();
    require_once('../model/employersModel.php');



    $name = trim($_REQUEST['name']);
    $company = trim($_REQUEST['company']);
    $contact = trim($_REQUEST['contact']);
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    

    if($username == "" || $password == "" || $name == ""
    || $company == "" || $contact == ""){
       echo "Fill out all the fields!";

    }else{
         $user = ['name'=> $name, 'company'=> $company,
         'contact'=> $contact,'username'=> $username, 'password'=>$password];
        addUser($user);
         echo "Success";
    }
?>