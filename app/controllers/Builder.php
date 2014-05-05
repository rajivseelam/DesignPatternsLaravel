<?php

use DesignPatterns\Builder\Director;

use DesignPatterns\Builder\CarBuilder;
use DesignPatterns\Builder\BikeBuilder;

class Builder extends BaseController {

	/**
	 *
	 * This pattern has a Director Class with a build method which has the information on how to build the object.
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
	public function car()
	{
		$carBuilder = new CarBuilder();

		$director = new Director();

		$car = $director->build($carBuilder);

		d($car); die;
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function bike()
	{
		$bikeBuilder = new BikeBuilder();

		$director = new Director();

		$bike = $director->build($bikeBuilder);

		d($bike); die;
	}



}
