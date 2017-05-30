<?php
 

 
//eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.
 require_once("../../DataLayer/DAdmin.php");
 require_once("../../LogicLayer/EAdmin.php");

        session_start();
$_SESSION["deleting_admin_id"]=$_POST["id"];


 $result =delete();

if($result===true){
	 header("Location: userList.php");
 
}else{
 echo "<h2>Unsuccesfull !!.<h2>";
 
}
 
?>