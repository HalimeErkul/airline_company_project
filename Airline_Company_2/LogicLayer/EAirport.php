<?php 
	class ECheck_in {

		private $airport_id;
		private $f_id;
		private $name;
		private $city;
		
		
		function __construct($airport_id = NULL, $f_id = NULL, $name = NULL, $city = NULL) {
			$this->airport_id = $airport_id;
			$this->f_id = $f_id;
			$this->name = $name;
			$this->city = $city;
			
		}
		
		public function getAirport_id() {
			return $this->airport_id;
		}

		public function getF_id() {
			return $this->f_id;
		}
		
		
		
		public function getName() {
			return $this->name;	
		}
		public function getCity() {
			return $this->city;
		}
		
		
		
	}
?>