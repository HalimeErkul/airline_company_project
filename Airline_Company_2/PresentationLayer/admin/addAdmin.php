<?php
 
 
 require_once("../../LogicLayer/EAdmin.php");

 
 $user=$_POST["username"];
 $pass=$_POST["password"];
 $admin = new EAdmin(null,$user,$pass);

 
        session_start();

$_SESSION["newAdmin"]=$admin;

  require_once("../../DataLayer/DAdmin.php");
 $result =register();

if($result===true){
 
 
echo "Kayıt başarılı.";
 
}else{
 echo "<h2>Kayıt olmadı<h2>";
 
}
 
$_SESSION["admin"]=$admin;
 
 header("Location: admin.php");

?>