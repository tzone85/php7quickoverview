<?php
nullCoalesceOperator
# Null Coalesce Operator old way of checking if something is set first

$_GET['name'] = 'Joe';

$name = isset($_GET['name']) ? $_GET['name'] : 'nothing';

var_dump($name);

# More elegant and PHP7 way of doing things

$secondName = $_GET['secondName'] ?? 'nothing';

var_dump($secondName);