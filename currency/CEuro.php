<?php 
	
	require_once 'CCurrency.php';	

	class CEuro extends CCurrency
	{
		
		private $rate;
		private $buyRate;

		public function __construct($name, $rate = 26, $buyRate = 27)
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