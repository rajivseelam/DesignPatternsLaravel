<?php

use DesignPatterns\Decorator\Webservice;
use DesignPatterns\Decorator\RenderInJson;
use DesignPatterns\Decorator\RenderInXml;


class DecoratorController extends BaseController {

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function jsonxml()
	{
		$data = array(
			'first_name' => 'Rajiv',
			'last_name' => 'Seelam'
			);


		$web = new Webservice($data);

		d($web->renderData());

		$json = new RenderInJson($web);

		d($json->renderData());

		$xml = new RenderInXml($web);

		d($xml->renderData());
	}

}
