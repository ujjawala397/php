<?php
$name="";
if(empty($_GET["name"]))
{
	echo 'name not found';
}
else
{
	$name = $_GET["name"];
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{	
		echo "only alphabets are allowed<br>";
	}
	else
	{
		echo $name."<br>";
	}
}

if(empty($_GET["email"]))
{
	echo 'email not found<br>';
}
else
{
	$email = $_GET["email"];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{	
		echo "invalid email<br>";
	}
	else
	{
		echo $email."<br>";
	}
}
if(empty($_GET["number"]))
{
	echo 'number not found<br>';
}
else
{
	$number = $_GET["number"];
	if(!preg_match("/^[0-9]{10}+$/",$number))
	{	
		echo "only numbers are allowed<br>";
	}
	else
	{
		echo $number;
	}
}																								
?>