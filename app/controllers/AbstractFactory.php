<?php

use DesignPatterns\AbstractFactory\HtmlFactory;
use DesignPatterns\AbstractFactory\JsonFactory;

class AbstractFactory extends BaseController {

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function html()
	{
		$htmlObject = new HtmlFactory();

		$text = $htmlObject->createText('This is the string to be rendered')->render();

		echo $text;

		$picture = $htmlObject->createPicture('http://placehold.it/350x150','This is the image name')->render();

		echo $picture;

		return 'Success';

	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function json()
	{
		$jsonObject = new JsonFactory();

		$text = $jsonObject->createText('This is the string to be rendered')->render();

		echo $text;

		$picture = $jsonObject->createPicture('http://placehold.it/350x150','This is the image name')->render();

		echo $picture;

		return 'Success';

	}
}
