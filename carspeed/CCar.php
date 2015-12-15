<?php
	/**
	* 
	*/
	class CCar
	{
		
		public $carName;
		public $maxSpeed;
		public $carCase;
		public $wheelsNum;
		public $rideTime;
		public $rideDistance;
		public $speedType;
		public $carSpeed;

		function __construct($carName, $carCase, $rideTime, $rideDistance, $maxSpeed = 220, $wheelsNum = 4, $speedType)
		{
			$this->carName = $carName;
			$this->maxSpeed = $maxSpeed;
			$this->carCase = $carCase;
			$this->wheelsNum = $wheelsNum;
			$this->rideTime = $rideTime;
			$this->rideDistance = $rideDistance;
			$this->speedType = $speedType;
		}


		public function getCarName()
		{
			return $this->carName; // returns car name
		}

		public function getMaxSpeed()
		{
			return $this->maxSpeed; // returns max speed of the car
		}

		public function getCarCase()
		{
			return $this->carCase; // returns type of carcase
		}

		public function getWheelsNum()
		{
			return $this->wheelsNum; // returns number of wheels
		}

		public function getRideTime()
		{
			return $this->rideTime; // returns time the car is driving
		}

		public function getRideDistance()
		{
			return $this->rideDistance; // returns the distance the car has driven
		}

		public function getSpeedType()
		{
			return $this->speedType; // returns km/h or m/s: e.g. if returns 1 - then km/h, if returns 3600 - then m/s
		}

		public function getCarSpeed()
		{
			return $this->carSpeed; // returns current speed of car
		}

		public function setCarName($carName)
		{
			$this->carName = $carName; // sets car name
		}

		public function setMaxSpeed($maxSpeed)
		{
			$this->maxSpeed = $maxSpeed; // sets maximum speed
		}

		public function setCarCase($carCase)
		{
			$this->carCase = $carCase; // sets type of care case (e.g. sedan, vehicle, van etc.)
		}

		public function setWheelsNum($wheelsNum)
		{
			$this->wheelsNum = $wheelsNum; // sets number of wheels
		}

		public function setRideTime($rideTime)
		{
			$this->rideTime = $rideTime; // sets the time the car is driving
		}

		public function setRideDistance($rideDistance)
		{
			$this->rideDistance = $rideDistance; // sets the distance the car has driven
		}

		public function setSpeedType($speedType)
		{
			$this->speedType = $speedType; // sets km/h (1) or m/s (3600)
		}

		public function setCarSpeed($rideTime, $rideDistance, $speedType, $carSpeed)
		{
			if ($speedType == "km/h") {
				$this->carSpeed = $rideDistance / $rideTime; // if km/h were chosen, calculating current speed in km/h
			}elseif ($speedType == "m/s") {
				$this->carSpeed = ($rideDistance * 1000) / ($rideTime * 3600); // if m/s were chosen, calculating speed in m/s
			}
		}
		
	}
?>