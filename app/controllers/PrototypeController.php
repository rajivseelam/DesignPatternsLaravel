<?php

use DesignPatterns\Prototype\FooBookPrototype;
use DesignPatterns\Prototype\BarBookPrototype;

class PrototypeController extends BaseController {


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function foobook()
	{
		// Create a object
		$fooPrototype = new FooBookPrototype();

		//Now Create Clones :)
		//
		for ($i = 0; $i < 10; $i++) {
		    $book = clone $fooPrototype;
		    $book->setTitle('Foo Book No ' . $i);
		    d($book->getTitle());
		}

		die;
	}


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function barbook()
	{

		// Create a object
		$barPrototype = new BarBookPrototype();

		//Now Create Clones :)
		//
		for ($i = 0; $i < 10; $i++) {
		    $book = clone $barPrototype;
		    $book->setTitle('Bar Book No ' . $i);
		    d($book->getTitle());
		}

		die;
	}



}
