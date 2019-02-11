<?php
namespace Design;

class Book implements BookInterface{
	
	public function open()
	{
		var_dump('open the paper book');
	}

	public function turnPage()
	{
		var_dump('turn the page of paper book');
	}
}   