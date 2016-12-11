<?php

echo "Functions with Arbitrary number of arguements: <br>";

function intro(){
	
	$args = func_get_args();

	foreach($args as $k => $v){
		echo "arg".($k+1).": $v <br>";
	}
}

intro('hello','world','people');



echo "Using Glob() to Find Files: <br>";
$files = glob('*.php');

print_r($files);


echo "Memory Usage Information: <br>";
echo "Initial: ".memory_get_usage()."bytes <br>";

print_r(getrusage());


function my_debug($msg, $line){
	echo "Line $line: $msg";
}
echo "<br>";
my_debug("This code was written on this line.", __LINE__);

echo "<br>";
 
echo "Generating Unique ID's: <br>";
echo md5(time(). mt_rand(1,100000));

echo "Serialization: <br>";
$myvar = array(
	'hello',
	42,
	array(1,'two'),
	'apple'
);

$string = serialize($myvar);
echo $string;
$newvar = unserialize($stirng);
print_r($newvar);


echo "Compressing Strings <br> ";

echo "<br>";
$randomstring=
"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";
 
$compressed = gzcompress($string);  
echo "Original size: ". strlen($string)."\n";    
echo "Compressed size: ". strlen($compressed)."\n";
$original = gzuncompress($compressed);


$start_time = microtime(true);
echo "execution took: ".
(microtime(true) - $start_time). " seconds.";
$start_time = microtime(true);
register_shutdown_function('my_shutdown');    
function my_shutdown() {
global $start_time;
echo "execution took: ".(microtime(true) - $start_time)." seconds.";
}
