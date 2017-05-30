<?php 
		require_once("/../LogicLayer/EAdmin.php");
	require_once("DB.php");
	$errorMeesage = "";
	
	

	function Validate(){

		session_start();
		$admin=$_SESSION["admin"];
		$name=$admin->username;
		$pass=$admin->password;

        $db = new DB();
				$result = $db->getDataTable("select username from admin where username='$name' and password='$pass' ");
			
			$gelenAD = $result->fetch_assoc()['username'];
			


			if ($gelenAD==$name) {
			return true;
			}
			else{
				return false;
			}



	}
	function register(){

		session_start();
		$admin=$_SESSION["newAdmin"];
		$name=$admin->username;
		$pass=$admin->password;

        $db = new DB();
				$result = $db->executeQuery("insert into admin(username , password) values ('".$name."','".$pass."')");
			
			
				return $result;

	



	}
	function getAdmins(){

		

        $db = new DB();
			$result = $db->getDataTable("select admin_id, username, password from admin");
			
			$allUsers = array();
			
			while($row = $result->fetch_assoc()) {
				$userObj = new EAdmin($row["admin_id"], $row["username"], $row["password"]);
				array_push($allUsers, $userObj);
			}
			
			return $allUsers;
	}
	function update(){

		$admin=$_SESSION["updateAdmin"];
		$id=$admin->admin_id;
		$name=$admin->username;
		$pass=$admin->password;

        $db = new DB();
			$result = $db->executeQuery("UPDATE admin SET username = '$name',password ='$pass'   WHERE admin_id='$id' ");
				
			
			return $result;
	}
	function delete(){

		$id=$_SESSION["deleting_admin_id"];
		
		

        $db = new DB();
			$result = $db->executeQuery("DELETE FROM admin WHERE admin_id='$id' ");
				
			
			return $result;
	}
?>