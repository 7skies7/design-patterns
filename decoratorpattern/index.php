<?php

// Multiple class files for different actions
// Cant extend the base class
// Decorator decorates the contract with new features to be implemented using the base class
// Run tinme object creation and dynamic
interface CarService
{

	public function getCost();
	public function getDescription();
}

class BasicInspection implements CarService 
{
	public function getCost()
	{
		return 25;
	}

	public function getDescription()
	{
		return 'Basic Inspection';
	}
}

class OilChange implements CarService 
{
	protected $carservice;

	public function __construct(CarService $carservice)
	{
		$this->carservice = $carservice;
	}

	 public function getCost()
	 {
	 	return $this->carservice->getCost() + 20;
	 }

	public function getDescription()
	{
		return $this->carservice->getDescription().' and oil change';
	}
}

class TireChange implements CarService 
{
	protected $carservice;

	public function __construct(CarService $carservice)
	{
		$this->carservice = $carservice;
	}

	 public function getCost()
	 {
	 	return $this->carservice->getCost() + 10;
	 }

	public function getDescription()
	{
		return $this->carservice->getDescription().' and tire change';
	}
}

$carservice = new Tirechange(new OilChange(new BasicInspection()));
echo $carservice->getCost().'<br>';
echo $carservice->getDescription();
?>
