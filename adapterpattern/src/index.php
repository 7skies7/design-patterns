<?php
/*
* @Adapter Design Pattern: An adapter allows you to translate one interface for use with one another
* @class Persion will open the book and turn the page of book 
* But now if you have kindle and you to read it from kindle we would need an adapter to adhere to the contract(interface) of the Book
* @class Kindle is and eReaderInterface is the contract/interface to the kindle
* Now eReaderInterface to adhere to contract to BookInterface we will add the eReaderAdapter
* Now whenever a person tries to read a book, BookInterface will return the contract but if the person tries to read the book from any eReader 
* the eReaderAdapter would translate the features of eReaderInterface to the BookInterface
*/
require './vendor/autoload.php';

use Design\Book;
use Design\BookInterface;
use Design\Kindle;
use Design\eReaderInterface;
use Design\eReaderAdapter;
use Design\Nook;


class Person {

	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new eReaderAdapter(new Nook));