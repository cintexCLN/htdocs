<?php
session_start();
if(isset($_POST))
{
	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		$password=$_POST['pswd'];
		$result=shell_exec('python /background_scripts/validate_username.py');
		echo $result;
	}
}
?>