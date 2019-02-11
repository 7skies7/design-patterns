<?php

/* Strategy Design Pattern: It defines the family of algorithms (ie differene implementations of Loggin)
* Ecapsulates them and make them interchangable using Interface(Polymorphism)
* Different Implementations of Loggin: LogToFile, LogToDatabase, LogToXWebService
*
*/
interface Logger{
	public function log();
}
//Family of alogirthms
class LogToFile implements Logger{

	public function log()
	{
		var_dump('Log the data to a file.');
	}
}

class LogToDatabase implements Logger{

	public function log()
	{
		var_dump('Log the data to a database.');
	}
}

class LogToXWebService implements Logger{

	public function log()
	{
		var_dump('Log the data to Saas.');
	}
}

//encapsulate and make them interchangable

class App {
	public function log($data, Logger $logger = null)
	{
		$logger = $logger ?: new LogToFile;

		$logger->log($data);
	}
}

$app = new App;

$app->log('Some Information here', new LogToXWebService);	