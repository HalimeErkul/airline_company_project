<?php 
	class EAirplane {

		private $airplane_id;
		private $capacity;
		private $available_seat;
		
		
		function __construct($airplane_id = NULL, $capacity = NULL, $available_seat = NULL) {
			$this->airplane_id = $airplane_id;
			$this->capacity = $capacity;
			$this->available_seat = $available_seat;
			
		}
		
		public function getAirplane_id() {
			return $this->airplane_id;
		}

		public function getCapacity() {
			return $this->capacity;
		}
		
		
		
		public function getAvailable_seat() {
			return $this->available_seat;	
		}
		
		
		
		
	}
?>