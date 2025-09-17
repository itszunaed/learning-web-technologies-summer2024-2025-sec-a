<?php

  $host = "127.0.0.1";  
$port = "91";          
$dbuser = "root";      
$dbpass = "";         
$dbname = "task"; 


    function getConnection(){
        global $dbname, $dbpass, $dbuser;
        $con = mysqli_connect($GLOBALS['host'], $dbuser, $dbpass, $dbname);
        return $con;
    }


?>