<?php

use DesignPatterns\SimpleFactory\ConcreteFactory;

class SimpleFactoryController extends BaseController {

	/**
	 *
	 * This is similar AbstractFactory but in Abstract we had different factories for different Types of objects 
	 * it can create.
	 *
	 * In StaticFactory there is only one static method and it only creates all types of objects.
	 * No subclasses!
	 *
	 * It specifies the sequence of methods to be called.
	 * 
	 */

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function bicycle()
	{
		d($this->vehicle('bicycle'));
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function scooter()
	{
		d($this->vehicle('other'));
	}


	/**
	 * [vehicle description]
	 * @param  [type] $type [description]
	 * @return [type]       [description]
	 */
	private function vehicle($type)
	{
		$simple = new ConcreteFactory();

		$vehicle = $simple->createVehicle($type);

		return $vehicle;
	}




}
