<?php

use DesignPatterns\DependencyInjection\ArrayConfig;
use DesignPatterns\DependencyInjection\Connection;

class DependencyInjectionController extends BaseController {

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function arrayConfig()
	{
		$storage = array();

		$config = new ArrayConfig($storage);

		$config->set('host','http://localhost');
		$config->set('password','http://localhost');
		

		/**
		 * Here Connection doesn't care to build the config, we are already in agreement that we
		 * send it a Parameters Object. 
		 *
		 * We injected the dependency!!
		 * 
		 */
		$conn = new Connection($config);

		$conn->connect();

		d($conn->getHost());

	}

}
