<?php

	$con=mysqli_connect('localhost','root');
	if($con){
		echo "connect";
	}
	else{
		echo "no";
	}
	mysqli_select_db($con, 'mywebdata');
	$user= $_post['user'];
	$email=$_POST['E-mail'];
	$mobileno=$_POST['mobile'];
	$branch=$_POST['branch'];
	$password=$_POST['password'];
	$comment=$_POST['comment'];
	$query="insert into registerdata(User, email, mobile, branch, password, comment)values('$user', '$email', '$mobileno',
	'$branch',$password,'$comment')";
	mysqli_query($con, $query);	
	header('location:home.php');
?>