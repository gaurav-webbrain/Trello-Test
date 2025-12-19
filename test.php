<?php
// Enter your code here, enjoy!
$array = array(
	"1" => "PHP code tester Sandbox Online",
	5,
	5 => 89009,
	"Random number" => rand(100, 999),
	"PHP Version" => phpversion()
);

echo 'changes Added chenges to reflact commit to check have made chages';
foreach ($array as $key => $value) {
	echo $key . "\t=>\t" . $value . "\n";
}
