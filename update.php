<?php // `git pull origin master`;
echo "test start";
$output = shell_exec( 'git pull origin master' );
echo "<pre>$output</pre>";
echo "test end";