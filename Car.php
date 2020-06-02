<?php

  // Car.php

  class Car
  {
  	/**
        * @var integer
        */
	private nbWheels;
	
	/**
        * @var integer
        */
	private currentSpeed;
	
	/**
        * @var string
        */
	private color;
	
	/**
        * @var integer
        */
	private nbSeats;
	
	/**
        * @var string
        */
	private energy;
	
	/**
        * @var integer
        */
	private energyLevel;
	
	public function __construct(string $color, integer $nbSeats, string $energy)
	{
		this->color = $color;
		this->nbSeats = $nbSeats;
		this->energy = $energy;
	}
	
	/**
     	* @param = Null
     	* @return void
     	*/
	public function forward() : void
	{
		
	}
	
	/**
     	* @param = Null
     	* @return void
     	*/
	public function brake() : void
	{
		
	}
	
	/**
     	* @param = Null
     	* @return void
     	*/
	public function start() : void
	{
		
	}
	
	/**
     	* @param = Null
     	* @return int
     	*/
	public function getNbWheels() : integer
	{
		return $this->nbWheels;
	}	
	
	/**
     	* @param = Null
     	* @return int
     	*/
	public function getCurrentSpeed() : integer
	{
		return $this->currentSpeed;
	}
	
	/**
     	* @param = Null
     	* @return string
     	*/
	public function getColor() : string
	{
		return $this->color;
	}
	
	/**
     	* @param = Null
     	* @return int
     	*/
	public function getnbSeats() : integer
	{
		return $this->nbSeats;
	}
	
	/**
     	* @param = Null
     	* @return string
     	*/
	public function getEnergy() : string
	{
		return $this->energy;
	}
	
	/**
     	* @param = Null
     	* @return int
     	*/
	public function getEnergyLevel() : integer
	{
		return $this->energyLevel;
	}
  }
