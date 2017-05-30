<?php 
	class ECheck_in {

		private $checkin_id;
		private $f_id;
		private $seat_no;
		private $pnr;
		
		
		function __construct($checkin_id = NULL, $f_id = NULL, $seat_no = NULL, $pnr = NULL) {
			$this->checkin_id = $checkin_id;
			$this->f_id = $f_id;
			$this->seat_no = $seat_no;
			$this->pnr = $pnr;
			
		}
		
		public function getCheckin_id() {
			return $this->checkin_id;
		}

		public function getF_id() {
			return $this->f_id;
		}
		
		
		
		public function getSeat_no() {
			return $this->seat_no;	
		}
		public function getPnr() {
			return $this->pnr;
		}
		
		
		
	}
?>