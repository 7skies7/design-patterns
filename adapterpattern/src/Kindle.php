<?php
namespace Design;

class Kindle implements eReaderInterface{
	
	public function turnOn()
	{
		var_dump('Turn on the kindle');
	}

	public function pressNextButton()
	{
		var_dump('press the next button on the Kindle');
	}
}   