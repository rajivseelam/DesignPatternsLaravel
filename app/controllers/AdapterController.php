<?php

use DesignPatterns\Adapter\Book;
use DesignPatterns\Adapter\Kindle;
use DesignPatterns\Adapter\EBookAdapter;

class AdapterController extends BaseController {


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function start()
	{
		/**
		 * The problem here is my controller is already made for a book, so it's 
		 * interface is made for it.
		 *
		 * There are two buttons 1. Open the book 2. Turns to next page
		 */
		
		//$book = new Book();

		/**
		 * Suddenly Ebooks came and we want to return a ebook here, but
		 * ebooks have no opening and turning, but starting and press next. How do we use ebook
		 * here then? We a Adapter.
		 *
		 * Like, Our current socket fits Book but not ebooks. So we use a Adapter in between our 
		 * Ebook and socket.
		 */
		
		$kindle = new Kindle();
		
		$book = new EBookAdapter($kindle);

		/**
		 * Internally EbookAdapter->open calls 'PressStart' of ebook!
		 */

		return $book->open();
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function next()
	{
		//$book = new Book();

		$kindle = new Kindle();

		$book = new EBookAdapter();

		return $book->turnPage();
	}



}
