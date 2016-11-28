<?php
session_start();
if(isset($_POST))
{
	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		$password=$_POST['pswd'];
		$result=shell_exec('python C:\xampp\htdocs\background_scripts\validate_credentials.py');
		$a=array();
		exec('python C:\xampp\htdocs\background_scripts\validate_credentials.py',$a);
		echo $a[0]."asas".$result;
	}
}
?>