<?php // access.php
include_once 'common.php';
include_once 'db.php';
session_start();

$login = isset($_POST['login']) ? $_POST['login'] : $_SESSION['login'];
$userId = isset($_POST['userId']) ? $_POST['userId'] : $_SESSION['userId'];
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : $_SESSION['pwd'];

if((!isset($userId)) AND (!isset($login))) {
  ?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=signin.php">
        <!--<script type="text/javascript">
            window.location.href = "./signin.php"
        </script>
		-->
        <title>Family 2 family - redirection to login page</title>
    </head>
    <body>
        Security is our primary concern, you will be redirected to the login page in a second. If you are not redirected automatically, follow the <a href='./signin.php'>link to login</a>.
    </body>
</html>
  <?php
  exit;
}

$_SESSION['login'] = $login;
$_SESSION['userId'] = $userId;
$_SESSION['pwd'] = $pwd;

dbConnect("matena");
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
  ?>
  <!DOCTYPE html">
  <html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=signin.php">
    <script type="text/javascript">
            window.location.href = "./signin.php"
    </script>
    <title>Family 2 family -  Access Denied - redirect to login</title>
        
  </head>
  <body>
  <h1>Out of luck!</h1>
  <p>We did not recognize your user details (login or password), or you are not a
     registered user of Family2family. To try logging in again, please follow to
     <a href="./singin.php">login page</a>.
   </p>
  </body>
  </html>
  <?php
  exit;
}
// retrieving full user name
$displayName = mysql_result($result,0,'displayName');
$_SESSION['userId'] = mysql_result($result,0,'userId');

?>
