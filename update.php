<?php

// echo "test start";
// $output = shell_exec( 'git pull origin master' );
// echo "<pre>$output</pre>";
// echo "test end";

// // using backticks
// $output = `ls -al`;
// echo "<pre>$output</pre>";

// // using shell_exec
// $output = shell_exec('ls -lart');
// echo "<pre>$output</pre>";

// git pull using backticks
$output = `git pull`;
echo "<pre>$output</pre>";

// git pull using shell_exec
$output = shell_exec('git pull');
echo "<pre>$output</pre>";