
<?php
session_start();
if(session_destroy()) //destroying all sessions
{
	header("Location: ../login/staff_login/index.php");
}
?>
