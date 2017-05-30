<?php
 
 
 require_once("../../LogicLayer/EAdmin.php");

 
 $user=$_POST["user"];
 $pass=$_POST["pass"];
 $admin = new EAdmin(null,$user,$pass);

 
        session_start();

$_SESSION["admin"]=$admin;

 
 

 
 header("Location: admin.php");

?>