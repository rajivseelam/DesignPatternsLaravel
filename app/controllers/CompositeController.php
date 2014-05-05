<?php

use DesignPatterns\Composite\Form;
use DesignPatterns\Composite\InputElement;
use DesignPatterns\Composite\TextElement;

class CompositeController extends BaseController {

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function form()
	{

		$form = new Form();

		$input = new InputElement();

		$form->addElement($input);

		$text = new TextElement();

		$form->addElement($text);

		echo $form->render();

	}



}
