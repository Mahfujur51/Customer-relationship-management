<?php
function check_login()
{
if(strlen($_SESSION['login'])==0)
	{	
			
		$_SESSION["login"]="";
		header("Location:index.php");
	}
}
?>