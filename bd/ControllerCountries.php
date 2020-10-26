<?php 

	class ControllerCountries {
		protected $countries;
		protected $countrie;
		protected $capital;
		
		public function __construct() {
			$this->init();
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function init() {
			$this->__set('countries', [
				"Italy" => "Rome", 
				"Luxembourg" => "Luxembourg", 
				"Belgium"=> "Brussels", 
				"Denmark" => "Copenhagen", 
				"Finland" => "Helsinki", 
				"France" => "Paris",
				"Slovakia" => "Bratislava",
				"Slovenia" => "Ljubljana",
				"Germany" => "Berlin",
				"Greece" => "Athens",
				"Ireland" => "Dublin",
				"Netherlands" => "Amsterdam",
				"Portugal" => "Lisbon",
				"Spain" => "Madrid",
				"Sweden" => "Stockholm",
				"United Kingdom" => "London",
				"Cyprus" => "Nicosia",
				"Lithuania" => "Vilnius",
				"Czech Republic" => "Prague",
				"Estonia" => "Tallin",
				"Hungay" => "Budapest",
				"Latvia" => "Riga",
				"Malta" => "Valetta",
				"Austria" => "Vienna",
				"Poland" => "Warsaw"	
			]);
		}

		public function searchCountries() {
			$result = [];

			// Checks for equality
			if (array_key_exists(ucfirst($this->countrie), $this->countries)) {
				$countrie = ucfirst($this->countrie);
				array_push($result, ['controller' => true, 'countrie' => $countrie ,'capital' => $this->countries[$countrie]]);
			} else {

				// Similar Checks
				$countrieDig = strtolower(trim($this->countrie));
				$result = [];
				foreach ($this->__get('countries') as $key => $value) {
					$countrie = strtolower(trim($key));
					if (mb_strpos($countrie, $countrieDig) !== false) {
						array_push($result, ['controller' => false, 'countrie' => $key, 'capital' => $value]);
					}
				}
			}

			return count($result) > 0 ? $result : false;
		}

	}

?>