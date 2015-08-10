<?php // access.php
include_once 'common.php';
include_once 'db.php';
include_once 'console.php'; //debugging function
require_once '/home/vol4_6/byethost33.com/b33_16498919/htdocs/php/hybridauth/Hybrid/Auth.php'; //hybridauth social login
session_start();

// initialize Hybrid_Auth class with the config file
$config_file_path = '/home/vol4_6/byethost33.com/b33_16498919/htdocs/php/hybridauth/config.php'; //hybridauth social login
			
$login = isset($_POST['login']) ? $_POST['login'] : $_SESSION['login'];
$userId = isset($_POST['userId']) ? $_POST['userId'] : $_SESSION['userId'];
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : $_SESSION['pwd'];
$provider = isset($_REQUEST['provider']) ? $_REQUEST['provider'] : $_SESSION['auth_provider'];

//if neither authentificated neither going to authentificate
if((!isset($userId)) AND (!isset($login)) AND (!isset($provider))) {
	unset($_SESSION['userId']);
	unset($_SESSION['pwd']);
	unset($provider);
	$_SESSION['warning'] = "You have to login first! Please login using your family2family username and password or via a social network.";
	back_to_signin(); //includes HTML with redirection to the signin page.
	exit;
}

if ($_SESSION['user_connected'] == true) {
	
	//user connected, only checking login time-out validation
	//TBD

} else {
//new login

	if(isset($provider)) {
	//logging-in with social button
		
		// the selected provider
		$provider_name = $_REQUEST["provider"];
		$_SESSION['auth_provider'] = $_REQUEST["provider"];
		
		try {
			// include HybridAuth library (done in header)
			$hybridauth = new Hybrid_Auth( $config_file_path ); //hybridauth social login
			
			// try to authenticate with the selected provider
			$adapter = $hybridauth->authenticate($provider_name);
	 
			// then grab the user profile
			$user_profile = $adapter->getUserProfile();
		}
	 
		// something went wrong?
		catch( Exception $e ) {
			debug_to_console($e);
			unset($_SESSION['userId']);
			unset($_SESSION['pwd']);
			unset($_SESSION['provider']);
			unset($provider);
			$_SESSION['warning'] = $e;
			//$_SESSION['warning'] = "There was an error using $provider authentication. Please try to login using your family2family username and password or try to log-in again please.";
			back_to_signin(); //includes HTML with redirection to the signin page.
			exit;
		}
	 
		// check if the current user already have authenticated using this provider before
		$user_exist = get_user_by_provider_and_id( $provider_name, $user_profile->identifier );
		
		debug_to_console($user_exist);
	 
		// if the used didn't authenticate using the selected provider before
		// we create a new entry on database.users for him
		if( ! $user_exist ) {
			create_new_hybridauth_user(
				$user_profile->email,
				$user_profile->firstName,
				$user_profile->lastName,
				$provider_name,
				$user_profile->identifier
			);
		}
	 
		// set the user as connected
		$_SESSION['displayName'] = mysql_result($result,0,'displayName');
		$_SESSION['userId'] = mysql_result($result,0,'userId');
		$_SESSION["user_connected"] = true;	
		$_SESSION['login'] = mysql_result($result,0,'login');
		$_SESSION['lastLoginDate'] = mysql_result($result,0,'lastLoginDate');
		$_SESSION['profileLastReviewed'] = mysql_result($result,0,'profileLastReviewed');
		
		unset($provider);
		exit;
	
	} else { //in case we don´t log-in using social buttons

		dbConnect();
		$query = "SELECT * FROM User WHERE
				login = '$login' AND password = PASSWORD('$pwd')";
		$result = mysql_query($query);
		if (!$result) {
		  error('A database error occurred while checking your '.
				'login details.\\nIf this error persists, please '.
				'contact f2f.support@kayak.webz.cz.');
		}

		if (mysql_num_rows($result) == 0) {
		  unset($_SESSION['userId']);
		  unset($_SESSION['pwd']);
		  $_SESSION['warning'] = "We did not recognize your user details (login or password), or you are not a
			 registered user of Family2family. To try log-in again please.";
			back_to_signin(); //includes HTML with redirection to the signin page.
			 exit;
		}
		// retrieving full user name
		$_SESSION['displayName'] = mysql_result($result,0,'displayName');
		$_SESSION['userId'] = mysql_result($result,0,'userId');
		$_SESSION['login'] = mysql_result($result,0,'login');
		$_SESSION['user_connected'] = true;
		$_SESSION['lastLogin'] = mysql_result($result,0,'lastLogin');
		$_SESSION['profileLastReviewed'] = mysql_result($result,0,'profileLastReviewed');
	}
}
?>
