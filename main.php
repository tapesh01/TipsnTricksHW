<?php

function intro(){
	
	$args = func_get_args();

	foreach($args as $k => $v){
		echo "arg".($k+1).": $v <br>";
	}
}

intro('hello','world','people');

$files = glob('*.php');

print_r($files);

echo "Initial: ".memory_get_usage()."bytes <br>";

print_r(getrusage());


function my_debug($msg, $line){
	echo "Line $line: $msg <br>";
}

my_debug("This code was written on this line.", __LINE__);


echo md5(time(). mt_rand(1,100000));
