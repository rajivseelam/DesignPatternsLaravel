<?php

use DesignPatterns\FactoryMethod\GermanFactory;
use DesignPatterns\FactoryMethod\ItalianFactory;

class FactoryMethodController extends BaseController {


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function german()
	{
		/**
		 * Note how we created a GermanFactory (which actually implemented a Interface) and 
		 * called the method which is already implemented in Abstract Interface.
		 *
		 * We can do override create method if we want!
		 */

		$germanFactory = new GermanFactory();

		$cheap = $germanFactory->create(1);

		$fast = $germanFactory->create(2);

		d($cheap);

		d($fast);
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function italian()
	{

		$italianFactory = new ItalianFactory();

		$cheap = $italianFactory->create(1);

		$fast = $italianFactory->create(2);

		d($cheap);

		d($fast);
	}



}
