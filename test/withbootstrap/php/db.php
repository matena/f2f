<?php // db.php

$dbhost = 'sql.free.fr';
$dbuser = 'matena';
$dbpass = '12369874';

function dbConnect($db='') {
    global $dbhost, $dbuser, $dbpass;
    
    $dbcnx = @mysql_connect($dbhost, $dbuser, $dbpass)
        or die('The site database appears to be down.');

    if ($db!='' and !@mysql_select_db($db))
        die('The site database is unavailable.');
    
    return $dbcnx;
}
?>
