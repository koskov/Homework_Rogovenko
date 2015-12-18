<?php 
	
	require_once 'CCurrency.php';	

	class CEuro extends CCurrency
	{
		
		private $rate = 26;
		private $buyRate = 27;

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