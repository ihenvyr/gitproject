<?php // `git pull origin master`;
$output = shell_exec( 'git pull origin master' );
echo "<pre>$output</pre>";