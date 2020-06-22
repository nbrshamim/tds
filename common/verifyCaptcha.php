<?php
/**
 * Author: Shahana Yasmin Chowdhury
 * E-mail: shahana.yc@gmail.com
 * National Board of Revenue(NBR)
 * Date: 10/10/2018
 * Time: 3:48 PM
 */



session_start();

if(($_REQUEST['captcha'] == $_SESSION['vercode'])){
//	$fname	=	mysql_real_escape_string($_REQUEST['fname']);
//	$lname	=	mysql_real_escape_string($_REQUEST['lname']);
	//Here you can write your sql insert statement. 
	
	echo 1;
}else{
	echo 0;
}

?>