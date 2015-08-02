<?php // db.php

$dbhost = "sql.free.fr";
$dbuser = 'matena';
$dbpass = '12369874';

$socialProviders = array(
    "facebook"	=> 1,
    "google" 	=> 2,
	"twitter"	=> 3,
);

function dbConnect($db='') {
    global $dbhost, $dbuser, $dbpass;
    
    $dbcnx = @mysql_connect($dbhost, $dbuser, $dbpass)
		or die('The site database appears to be down.');

    if ($db!='' and !@mysql_select_db($db))
        die('The site database is unavailable.');
    
	return $dbcnx;
}
 

 
/*
* get the user data from database by email and password
**/
function get_user_by_email_and_password( $email, $password ) {
	dbConnect("matena");
	$query = "SELECT * FROM User WHERE email = '$email' AND password = PASSWORD('$password')";
	$result = mysql_query($query);
	if (!$result) {
		error('A database error occurred while checking your '.
        'login details.\\nIf this error persists, please '.
        'contact f2f.support@kayak.webz.cz.');
	}
	return $result -> fetch_object();
}
 
/*
* get the user data from database by provider name and provider user id
**/
function get_user_by_provider_and_id( $provider_name, $provider_user_id ) {
	$providerId = $socialProviders[$provider_name];
	dbConnect("matena");
	$query = "SELECT * FROM SocialLogin WHERE providerId = '$social_list[$providerId]' AND providerUserId = '$provider_user_id'";
	$result = mysql_query($query);
	if (!$result) {
		error('A database error occurred while checking your '.
        '$provider_name login details.\\nIf this error persists, please '.
        'contact f2f.support@kayak.webz.cz.');
	}
	return $result -> fetch_object();
}

/*
* get the user data from database by provider name and provider user id
**/
function create_new_hybridauth_user( $email, $first_name, $last_name, $provider_name, $provider_user_id )
{
	// let generate a random password for the user
	$password = md5( str_shuffle( "0123456789abcdefghijklmnoABCDEFGHIJ" ) );
 
	mysqli_query_excute(
		"INSERT INTO users
		(
			email,
			password,
			first_name,
			last_name,
			hybridauth_provider_name,
			hybridauth_provider_uid,
			created_at
		)
		VALUES
		(
			'$email',
			'$password',
			'$first_name',
			'$last_name',
			$provider_name,
			$provider_user_id,
			NOW()
		)"
	);
}

/* ORIGINAL PHP FUNCTIONS FROM HYBRIDAUTH EXAMPLES
* get the user data from database by email and password
function get_user_by_email_and_password( $email, $password )
{
	return mysqli_query_excute( "SELECT * FROM users WHERE email = '$email' AND password = '$password'" );
}
**/
 
/*
* get the user data from database by provider name and provider user id
function get_user_by_provider_and_id( $provider_name, $provider_user_id )
{
	return mysqli_query_excute( "SELECT * FROM users WHERE hybridauth_provider_name = '$provider_name' AND hybridauth_provider_uid = '$provider_user_id'" );
}

// You know how it works...
$link = mysqli_connect( "localhost", "my_user", "my_password", "database" );
 
/*
* We need this function cause I'm lazy

function mysqli_query_excute( $sql )
{
	global $link;
 
	$result = mysqli_query( $link, $sql );
 
	if(  ! $result )
	{
		die( printf( "Error: %s\n", mysqli_error( $link ) ) );
	}
 
	return $result->fetch_object();
}
 
**/

?>
