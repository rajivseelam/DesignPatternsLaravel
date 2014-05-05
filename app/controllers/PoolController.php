<?php

use DesignPatterns\Pool\Pool;
use DesignPatterns\Pool\Processor;

class PoolController extends BaseController {

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function index()
	{
		/**
		 * This is an interesting pattern.
		 *
		 * Let's say Worker is a class which can manipulate a image, but
		 * it's really expensive to initiate one. So, we go ahead and come up
		 * with a solution that we will create such an object and use it over 
		 * and over.
		 *
		 * But important thing is we aren't creating one such object here,
		 * but a pool of objects.
		 * 
		 */

		/**
		 * The following code, to summarize tells Pool to take of
		 * a pool of Worker Objects. For now let's say this is what
		 * it is supposed to do:
		 *
		 * When I ask you to give me a worker object you give me! You may one of two things:
		 * 	a. Create a new object of Worker.
		 * 	b. Give me an object which is already created and not current in use.
		 *
		 * That is how Pool Pattern become a Creational Pattern, it takes care of creating
		 * the objects and maintaining a pool of it.
		 * 
		 */

		$pool = new Pool('DesignPatterns\Pool\Worker');


		/**
		 * Wikipedia says: "The object pool pattern is a software creational design pattern 
		 * that uses a set of initialized objects kept ready to use – a "pool" – rather than 
		 * allocating and destroying them on demand. A client of the pool will request an object 
		 * from the pool and perform operations on the returned object. When the client has finished, 
		 * it returns the object, which is a specific type of factory object, to the pool rather than 
		 * destroying it."
		 * 
		 * Processor is actually the Client which is using the this pattern and takes care of this.
		 *
		 * Processor is the client of the Pool, so we pass pool object to its constructor. When a
		 * process, as in work by Worker on the images is done a callback is of Processor is called,
		 * which returns the object to pool.
		 */

		$processor = new Processor($pool);

		$processor->process('image1.jpg');
		$processor->process('image2.jpg');
		$processor->process('image3.jpg');
		$processor->process('image4.jpg');
		$processor->process('image5.jpg');
		$processor->process('image6.jpg');
		$processor->process('image7.jpg');
		$processor->process('image8.jpg');

		d($pool->getInstances()); die;

	}



}
