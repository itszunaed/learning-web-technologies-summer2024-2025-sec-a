<?php

    require_once('db.php');

function login($user){
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}


function getUserById($id){
    $con = getConnection();
    $sql = "select * from users where id={$id}";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function addUser($user){
    $con = getConnection();
    $sql = "insert into employers values(null,'{$user['name']}', '{$user['company']}', '{$user['contact']}',  '{$user['username']}', '{$user['password']}')";
    mysqli_query($con, $sql);
    
}

function deleteUser($user){

}

function getAllUser(){
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }

    return $users;
}

function updateUser($user){

}
?>