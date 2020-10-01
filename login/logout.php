
<?php
session_start();
if(session_destroy()) //destroying all sessions
{
	header("Location: farmer_login/index.php");
}
?>
