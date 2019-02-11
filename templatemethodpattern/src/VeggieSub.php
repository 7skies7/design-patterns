<?php 

namespace Design;
use Design\Sub;

class VeggieSub extends Sub{

	public function addPrimaryToppings()
	{
		var_dump('add some veggies');
		return $this;
	}

}