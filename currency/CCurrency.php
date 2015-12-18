<?php 

	class CCurrency
	{
		protected $name;

		protected function __construct($name)
		{
			$this->name = $name;
		}

		public function getName()
		{
			return $this->name;
		}

		public function calcSum($rate, $amount)
		{
			return $sum = $amount * $rate;
		}
	}
?>