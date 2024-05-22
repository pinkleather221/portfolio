<?php

session_start();
if($_SERVER ["REQUEST_METHOD"]==="POST"){
    //DEFINE THE AUTHORISED USER 
    
    $default_username="nelly";
    $default_password="nelly123";

    //get form

    $username=$_POST["txtusername"];
    $password=$_POST["txtpassword"];

    if($default_username==$username && $default_password== $password){
        header("location:Education.html");
        exit();
    }else{
        echo"<h1 style="color:blue;">invalid credentials!!</h1>";
        exit();
    }




}
?>