<?php
// spaceship operator

/*$games = ['Mass Effect', 'Super Mario Bros', 'Zeda', 'Follout', 'Metal Gear'];

//rsort($games);

usort($games, function ($a, $b){
	var_dump('a: ' . $a . ' b: ' . $b);
	return strlen($a) <=> strlen($b); // return -1, 0, 1
});
var_dump($games);
*/

/*class User {
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getUsers()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}

class UserCollection {
	protected $users;

	public function __construct(array $users)
	{
		$this->users = $users;
	}

	public function sortBy($property)
	{
		usort($this->users, function($userOne, $userTwo) use ($property){
			return $userOne->$property() <=> $userTwo->$property();
		});

//		return $this->users;
	}

	public function users()
	{
		return $this->users;
	}
}

$collection = new UserCollection([
	new User('Jeff', 30),
	new User('Taylor', 29),
	new User('Jane', 50),
	new User('Susia', 10),
]);

$collection->sortBy('getName');

var_dump($collection->users());
*/
interface Logger {
	public function log($message);
}

/*
 * say for some reason we don't need this class
class TerminalLogger implements Logger {

	public function log($message){
		var_dump($message);
	}
}
*/

class Application {
	protected $logger;

	public function setLogger(Logger $logger){
		$this->logger = $logger;

		return $this;
	}

	public function action()
	{
		$this->logger->log('Doing things');
	}

}

$app = new Application();
$app->setLogger(new class implements Logger {
	public function log($message)
	{
		var_dump($message);
	}
});
$app->action();