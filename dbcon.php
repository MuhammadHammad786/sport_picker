<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = "sport_picker";

 $con = mysqli_connect($server,$username,$password,$db);
 if(!$con){
     echo "error";
 }
 else{
    //  echo "success";
 }
?>