<?php

use DesignPatterns\StaticFactory\StaticFactory;

class StaticFactoryController extends BaseController {

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
	public function number()
	{
		$number = StaticFactory::factory('number');

		d($number);
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function string()
	{
		$string = StaticFactory::factory('string');

		d($string);
	}



}
