<?php
 

 
//eğer login session kaydı yapılmadan yani giriş yapmadan admin.php sayfamıza erişmek isterlerse buna engel oluyoruz.
 require_once("../../DataLayer/DAdmin.php");
 $result =validate();

if($result===true){
 
 $name=$_SESSION["admin"]->username;
echo "Giriş başarılı hoşgeldiniz ".$name;

 echo '<br></br>
<form action="userList.php">
<tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Show Users"></td>          
</tr>
</form> ';

}else{
 echo "<h2>Yanlış giriş yaptınız lütfen tekrar deneyiniz.<h2>";
 
}
 
?>

