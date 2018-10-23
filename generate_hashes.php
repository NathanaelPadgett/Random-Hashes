<?php
// number of times to loop through all the algorithms (filling up the browser screen)
$loop_x_times = 5;
// determine what hashing algorithms the system is capable of
$hash_algos = hash_algos();
// use break-word so that the text will wrap inside the browser
print "<div style='word-wrap: break-word;'>";
// loop x times so we can fill up the screen with straight hashes
for ($i=0;$i<$loop_x_times;$i++){
	// loop through the available hasing algorithms
	foreach ($hash_algos as $hash_algo) {
		// each time, generate a new random hex value based on cryptographically secure pseudo-random bytes
		$random_hex = bin2hex(random_bytes(16));
		// use the random hex value to generate the given hash
		print hash($hash_algo, $random_hex);	
	}
}
print "</div>";
