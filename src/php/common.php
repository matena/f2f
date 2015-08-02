<?php // common.php


function error($msg) {
    ?>
    <html>
    <head>
    <script language="JavaScript">
    <!--
        alert("<?=$msg?>");
        history.back();
    //-->
    </script>
    </head>
    <body>
    </body>
    </html>
    <?
    exit;
}

function back_to_signin() {
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
  <?
}
  
?>
