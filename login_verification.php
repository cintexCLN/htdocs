<?php
include 'C:\\xampp\\htdocs\\config.php';
//error_reporting(0);
session_start();
if(isset($_POST))
{
	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		$password=$_POST['pswd'];
		$result=shell_exec('python '.$master_config['base_path'].'background_scripts\validate_credentials.py -u'.$_POST['email'].' -p '.$_POST['pswd']);
		print_r($result);
		try{
			$result=explode("~:~",$result);
			
			}
		catch(Exception $e)
		{
			echo '<script>alert("error:x1101");</script>';
		}
		//echo "<pre>";
		//echo 'python '.$master_config['base_path'].'\background_scripts\validate_credentials.py -u'.$_POST['email'].' -p '.$_POST['pswd'];
		//print $master_config['base_path'];
		//var_dump($master_config);
		//echo "</pre>";
		//die("LOLz");
		if($result[0]=="Token")
		{
			$_SESSION['LOGGED']="TRUE";
			$_SESSION['USER_INFORMATION']=['USER_NAME'=>$result[2],'USER_TOKEN'=>$result[1]];
			$_SESSION['USER_ID']=$result[3];
			$_SESSION['JUST_LOGGED']=TRUE;
			echo '<script>location.href="/dashboard.php"</script>';
		}
		//$a=array();
		
	}
}
?>