<?php // access.php
include_once 'common.php';
include_once 'db.php';
include_once 'console.php'; //debugging function
require_once '/home/vol4_6/byethost33.com/b33_16498919/htdocs/php/hybridauth/Hybrid/Auth.php'; //hybridauth social login
require_once '/home/vol4_6/byethost33.com/b33_16498919/htdocs/thirdparty/KLogger.php'; //logging framework
session_start();
$log = new KLogger ( "log.txt" , KLogger::DEBUG );

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
		
	$log->LogDebug("Social login with $provider started");

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
			$log->LogDebug("Exception in hybridauth procedure: ".  $e->getMessage());
			unset($_SESSION['userId']);
			unset($_SESSION['pwd']);
			unset($_SESSION['provider']);
			unset($provider);
			$_SESSION['warning'] = $e->getMessage();
			//$_SESSION['warning'] = "There was an error using $provider authentication. Please try to login using your family2family username and password or try to log-in again please.";
			back_to_signin(); //includes HTML with redirection to the signin page.
			exit;
		}
		
		// SOCIAL AUTHENTIFICATION SUCCESS
		
		// check if the current user already have authenticated using this provider before
		$s_userId = get_user_by_provider_and_id( $provider, $user_profile->identifier );
		
		if( !(is_null($s_userId))) {
			// set the user as result
			$log->LogDebug("Getting user with user_id: ". $s_userId);
			$result = get_user_by_id( $s_userId);
			//we will use the result by the end of the file to populate the session variables

		} else { // if the used didn't authenticate using the selected provider before
				 // we create a new entry on database users for him
		
			$log->LogDebug("User id for this provider not found in DB tabke SocialLogin .");
					
			//if we have this user (given the e-mail), just create the SocialLogin record,
			//else create a new user
			if (user_exists_by_field($user_profile->email, "email")) {
				$log->LogDebug("We have this user (by e-mail: " . $user_profile->email ." ).");
	
				create_new_socauth_record(
					$user_profile->email,
					$provider,
					$user_profile->identifier,
					$user_profile->displayName
				);
			} else { //create a brand new new user
				$created_user = create_new_hybridauth_user(
					$user_profile->email,
					$user_profile->firstName,
					$user_profile->lastName,
					$provider,
					$user_profile->identifier,
					$user_profile->displayName
				);
				if ($created_user ) {
					// set the user as result
					$log->LogDebug("User created");
					$result = get_user_by_email_and_password($user_profile->email,NULL );
					//we will use the result by the end of the file to populate the session variables
					$_SESSION['info'] = "Welcome to family2family! We have created a new profile for you, based on your $provider information. Your login is: " . $result["login"] . ", account details will be sent to your mail shortly, please set new password in the profile page.";
					
				} else {
					$_SESSION['danger'] = "Your profile could not be created, please try again later or let us know.";
					back_to_signin(); //includes HTML with redirection to the signin page.		
				}
			}
		}	
		
	} else { //in case we don´t log-in using social buttons
		$log->LogDebug("Login with login $login and password $pwd");
		if ($login && $pwd) {
			$result = get_user_by_login_and_password( $login, $pwd );
		} else {
			$_SESSION['warning'] = "We did not got your user details (login or password)";
			back_to_signin(); //includes HTML with redirection to the signin page.		
		}
		
	}
	
	//did we really get a user profile as expected?
	if (!$result) {
		error('A database error occurred while checking your '.
			'login details.\\nIf this error persists, please '.
			'contact f2f.support@kayak.webz.cz.');
		unset($_SESSION['userId']);
		unset($_SESSION['pwd']);
		$_SESSION['warning'] = "We did not recognize your user details (login or password), or you are not a
		 registered user of Family2family. To try log-in again please.";
		back_to_signin(); //includes HTML with redirection to the signin page.
		exit;
	}		

	// retrieving full user name for users connected via social auth or via login and password 
	$_SESSION['success'] = "Logged-in as : " . $result['login'];
	$_SESSION['displayName'] = $result['displayName'];
	$_SESSION['userId'] = $result['userId'];
	$_SESSION['login'] = $result['login'];
	$_SESSION['user_connected'] = true;
	$_SESSION['lastLogin'] = $result['lastLogin']; // we keep the previous value in session
	update_last_login($result['userId']); 		   // and we update the database
	$_SESSION['profileLastReviewed'] = $result['profileLastReviewed'];
}
?>
