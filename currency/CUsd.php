<?php 
	
	require_once 'CCurrency.php';	

	class CUsd extends CCurrency
	{
		
		private $rate;
		private $buyRate;

		public function __construct($name, $rate = 23.2, $buyRate = 25)
		{
			parent::__construct($name);
			$this->rate = $rate;
			$this->buyRate = $buyRate;
		}

		public function getRate()
		{
			return $this->rate;
		}

		public function getBuyRate()
		{
			return $this->buyRate;
		}
	}
?>