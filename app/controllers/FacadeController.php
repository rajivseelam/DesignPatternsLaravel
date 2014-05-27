<?php

use DesignPatterns\Facade\Facade;
use DesignPatterns\Facade\Bios;
use DesignPatterns\Facade\Os;


class FacadeController extends BaseController {


    protected $facade;

    public function __construct()
    {
        $this->facade = new Facade(new Bios(),new Os());
    }


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function index()
	{
		$this->facade->turnOn();
		$this->facade->turnOff();
	}

}
