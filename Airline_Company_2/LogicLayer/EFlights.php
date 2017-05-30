<?php 
	class EFlight {
		private $f_id;
		private $from_id;
		private $to_id;
		private $departure_time;
		private $arrival_time;
		private $departure_date;
		private $airplane_id;
		private $port_no;
		
		function __construct($f_id = NULL, $from_id = NULL, $to_id = NULL, $departure_time = NULL, $arrival_time = NULL, $departure_date = NULL, $airplane_id = NULL, $port_no = NULL) {
			$this->f_id = $f_id;
			$this->from_id = $from_id;
			$this->to_id = $to_id;
			$this->departure_time = $departure_time;
			$this->arrival_time = $arrival_time;
			$this->departure_date = $departure_date;
			$this->airplane_id = $airplane_id;
			$this->port_no = $port_no;
		}
		
		public function getF_id() {
			return $this->f_id;
		}
		
		public function getFrom_id() {
			return $this->from_id;
		}
		
		public function getTo_id() {
			return $this->to_id;	
		}
		public function getDeparture_time() {
			return $this->departure_time;
		}
		
		public function getArrival_time() {
			return $this->arrival_time;
		}
		
		public function getdDparture_date() {
			return $this->departure_date;	
		}
		public function getAirplane_id() {
			return $this->airplane_id;
		}
		
		public function getPort_no() {
			return $this->port_no;
		}
		
		
	}
?>