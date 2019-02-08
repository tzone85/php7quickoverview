<?php
// spaceship operator

php7AutoLoadClasses
require 'vendor/autoload.php';


use App\{Person, Animals};

# old way# use App\Animals

var_dump(new Person);
var_dump(new Animals);