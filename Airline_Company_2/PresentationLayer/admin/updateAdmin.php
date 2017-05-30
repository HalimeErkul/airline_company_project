<?php
 

 
//eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.
 require_once("../../DataLayer/DAdmin.php");
 require_once("../../LogicLayer/EAdmin.php");

        session_start();
        echo $_POST["username"];
$updateAdmin=new EAdmin($_POST["id"],$_POST["username"],$_POST["password"]);
 $_SESSION["updateAdmin"]=$updateAdmin;
 $result =update();

if($result===true){
	 header("Location: userList.php");
 
}else{
 echo "<h2>Unsuccesfull !!.<h2>";
 
}
 
?>