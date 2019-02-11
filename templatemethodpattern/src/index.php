<?php

/* Template Method Design Pattern: It is a behavioral design pattern that defines the program skeleton of an alogrithm in a methods called an template method, which defers some steps to subclasses
Primary Usage: Remove Code Duplication
Suppose there is a Sub Sandwich shop and there are VeggieSub and TurkeySub and the alogrithm is same for both subs except the the primary toppings is differet.
Here we have a abstract class which list all the common taks in the alogirthm of making a sandwich which removes the duplication
The abstract class Sub also has a abstract method addPrimaryToppings which makes sure that all the subclasses have a method called addPrimaryToppings for which the implementation is specific to the sub i.e adhering to the contract

*/
require "vendor/autoload.php";

use Design\TurkeySub;
use Design\VeggieSub;
(new VeggieSub)->make();
(new TurkeySub)->make();

