<?php

class User{}

interface SomeInterface{
	public function getUser() : User;
}

class SomeClass implements SomeInterface{
	public function getUser() : User
	{
		return new User;
	}
}

(new SomeClass())->getUser();