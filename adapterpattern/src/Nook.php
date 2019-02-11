<?php
namespace Design;

class Nook implements eReaderInterface{
	
	public function turnOn()
	{
		var_dump('Turn on the nook');
	}

	public function pressNextButton()
	{
		var_dump('press the next button on the nook');
	}
}   