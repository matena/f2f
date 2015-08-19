<?php // db.php
require_once '/home/vol4_6/byethost33.com/b33_16498919/htdocs/thirdparty/KLogger.php'; //logging framework



$socialProviders = array(
    "facebook"	=> 1,
    "google" 	=> 2,
	"twitter"	=> 3,
);

function dbConnect() { //throws 
	$dbhost = "sql202.byethost33.com";
	$dbname = "b33_16498919_f2f";
	$dbuser = 'b33_16498919';
	$dbpass = '12369874';
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );

    try {
		$dbPDO = new PDO('mysql:host=' . $dbhost .';dbname=' . $dbname . ';charset=utf8', $dbuser, $dbpass, array(PDO::ATTR_EMULATE_PREPARES => false, 
		                                                                                           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch(PDOException $e) {
		$log->LogError('Problem with the database connection called as PDO connection: ' . $e->getMessage());
	}
	return $dbPDO;
}
 

/*.v.
* get the user data from database by login and password
**/
function get_user_by_login_and_password( $login, $password ) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	
	$log->LogDebug("get_user_by_login_and_password() called with login: $login and password (not logged for security) parameters");
	$db = dbConnect();
	$query = "SELECT * FROM User WHERE login = '$login' AND password = PASSWORD('$password')";
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$row_count = $stmt->rowCount();
		
		$log->LogDebug("OK, exiting get_user_by_email_and_password(), $row_count selected");
		return $stmt->fetch(PDO::FETCH_ASSOC); //we expect one result as the e-mail is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
	
}

 
/*
* get the user data from database by email and password
**/
function get_user_by_email_and_password( $email, $password ) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	
	$log->LogDebug("get_user_by_email_and_password() called with: $email and ". $password ? md5($password): "NULL" ." parameters");
	$db = dbConnect();
	if ($password) {
		$query = "SELECT * FROM User WHERE email = '$email' AND password = PASSWORD('$password')";
	} else {
		$query = "SELECT * FROM User WHERE email = '$email'";
	}
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$row_count = $stmt->rowCount();
		
		$log->LogDebug("OK, exiting get_user_by_email_and_password(), $row_count selected");
		return $stmt->fetch(PDO::FETCH_ASSOC); //we expect one result as the e-mail is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
	
}
 
/*
* get the social user data from database table SocialLogin by provider name and provider user id
**/
function get_user_by_provider_and_id( $provider_name, $provider_user_id ) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$log->LogDebug("get_user_by_provider_and_id() called with: $provider_name and $provider_user_id parameters");
	
	$providerId = $socialProviders[$provider_name];
	$db = dbConnect();
	$query = "SELECT * FROM SocialLogin WHERE providerId = '$provider_name' AND providerUserId = '$provider_user_id'";
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$log->LogDebug("OK, exiting get_user_by_provider_and_id()");
		return $stmt->fetch(PDO::FETCH_ASSOC); //we expect one result as the e-mail is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
	
}

/*
* update the last log-in information for user: user_id
**/
function update_last_login( $user_id ) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$datetime = date("Y-m-d H:i:s"); // MySQL DATETIME format
	$log->LogDebug("update_last_login() called for user_id: $user_id, time is: $datetime .");
	
	$db = dbConnect();
	$query = "UPDATE User SET lastLogin = ? WHERE userId = ?";
	try {
		$stmt = $db->prepare($query);
		$stmt->execute(array($datetime, $user_id));
		$count = $stmt->rowCount();
		$log->LogDebug("DB UPDATE affected $count lines, exiting update_last_login()");
		return $count; //we expect one result as the e-mail is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
	
}

/*
* create new user based on the social login
**/
function create_new_socauth_record(
					$provider_name,
					$identifier,
					$displayName
				) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$log->LogDebug("create_new_socauth_record called with: " . $provider_name .", ". $identifier .", " . $displayName);
	$db = dbConnect();
	//create number of the provider
	$socialProviderNr = $socialProviders[$provider_name];
	$s_id = $identifier;
	$s_username = $displayName;
	
	
	try {
	$db->beginTransaction();
 
	$affectedRows = $db->exec(		
		"INSERT INTO SocialLogin SET
            userId = User.userId WHERE User.email = '$email' ,
			providerId =  '$socialProviderNr',
			providerUserId = '$s_id',
			socialUserName = $s_username
		");
	
	$insertId = $db->lastInsertId();
	$db->commit();
	$log->LogDebug('Creating user: '. $insertId1 . ' and ' . $insertId2 .	 ' rows affected.');

	} catch(PDOException $ex) {
		//Something went wrong rollback!
		$db->rollBack();
		$log->LogError('Error while creating a new user in database. Rolling back.' . $ex->getMessage());
	}
}
/*
* create new user based on the social login
**/
function create_new_hybridauth_user( $login, $email, $first_name, $last_name, $provider_name, $provider_user_id, $displayName ) {
	global $socialProviders;
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$log->LogDebug("create_new_hybridauth_user called with: $login, $email, $first_name, $last_name, $provider_name, $provider_user_id and $displayName");
	$db = dbConnect();
	// let generate a random password for the user
	$password = md5( str_shuffle( "0123456789abcdefghijklmnoABCDEFGHIJ" ) );
	$password = substr($password, 0, 10);
	$datetime = date("Y-m-d H:i:s"); // MySQL DATETIME format
	$log->LogDebug("generated password: $password , generated time: $datetime");
	
	
	// we need to add check for existence of such login
	
	//create login out of the e-mail address
	
	try {
		$db->beginTransaction();
	 
	//in the upcoming query we leave default values for lastLogin, etc. (all NULL)
		$affectedRows1 = $db->exec(		
			"INSERT INTO User SET
				  login = '$login',
				  password = PASSWORD('$password'),
				  displayName = '$first_name $last_name',
				  email = '$email',
				  createDate = '$datetime',
				  userLevel = '0'
				  ");
		
		$insertId1 = $db->lastInsertId();
		
		$socialProviderNr = $socialProviders["$provider_name"];

		$affectedRows2 = $db->exec(		
			"INSERT INTO SocialLogin (userId, providerId, providerUserId, socialUserName)
			 SELECT User.userId, '$socialProviderNr', '$provider_user_id', '$displayName'
			 FROM User
			 WHERE User.email = '$email'");	

// INSERT INTO table1 ( column1, column2, someInt, someVarChar )
// SELECT  table2.column1, table2.column2, 8, 'some string etc.'
// FROM    table2
// WHERE   table2.ID = 7				  
		$insertId2 = $db->lastInsertId();
			
		$db->commit();
		$log->LogDebug('Created user: '. $login);
		return TRUE;

	} catch(PDOException $ex) {
		//Something went wrong rollback!
		$db->rollBack();
		$log->LogError('Error while creating a new user in database. Rolling back.' . $ex->getMessage());
		return FALSE;
	}
}

/*
* check if user exists based on one of the unique columns (id, login, email)
* returns TRUE or FALSE
**/
function user_exists_by_field($value, $column_name) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$log->LogDebug("user_exists_by_field called with: $value on column: $column_name");
	$db = dbConnect();
	// let generate a random password for the user
	$query = "SELECT * FROM User WHERE $column_name = '$value'";
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$log->LogDebug("DB search done, user_exists_by_field(), the result is " . ($stmt->rowCount ? 'TRUE' : 'FALSE') );
		return $stmt->rowCount(); //we expect one result as the e-mail is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
}

/*
* check if user exists based on one of the unique columns (id, login, email)
* returns user array
**/
function get_user_by_id($user_id) {
	$log = new KLogger ( "log.txt" , KLogger::DEBUG );
	$log->LogDebug("get_user_by_id called with: $user_id");
	$db = dbConnect();
	// let generate a random password for the user
	$query = "SELECT * FROM User WHERE $userId = '$user_id'";
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$row_count = $stmt->rowCount();
		
		$log->LogDebug("OK, exiting get_user_by_id(), $row_count selected");
		return $stmt->fetch(PDO::FETCH_ASSOC); //we expect one result as the userId is unique in User table	
	} catch(PDOException $e) {
		$log->LogError('Problem with the database query execution : ' . $e->getMessage());
		return NULL;
	}
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
