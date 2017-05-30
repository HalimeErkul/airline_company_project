<?php 
	class EAdmin {

		public $admin_id;
		public $username;
		public $password;
		
		
		
		function __construct( $admin_id=null,$username = NULL, $password = NULL) {
			$this->username = $username;
			$this->password = $password;
			$this->admin_id=$admin_id;
		}

		public function getAdmin_id() {
			return $this->admin_id;
		}

		public function getUsername() {
			return $this->username;
		}
		
		
		
		public function getPassword() {
			return $this->password;	
		}
		
		
		
		
	}
?>