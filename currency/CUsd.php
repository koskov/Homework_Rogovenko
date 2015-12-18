<?php 
	
	require_once 'CCurrency.php';	

	class CUsd extends CCurrency
	{
		
		private $rate = 23.2;
		private $buyRate = 25;

		public function __construct($name)
		{
			parent::__construct($name);
			
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