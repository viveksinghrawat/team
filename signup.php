<?php

$FirstName  =$_POST['FIRSTNAME'];
$LastName	=$_POST['LASTNAME'];
$Email    	=$_POST['EMAIL'];
$Password	=$_POST['PASSWORD'];
$Mobile  	=$_POST['MOBILE'];

//$conn=mysqli_connect('localhost','root','' ,'Database: project : online quiz');
$conn=new mysqli('localhost','root','','project2');

$sql="insert into SIGNUP( FIRSTNAME,LASTNAME,EMAIL,PASSWORD,MOBILE ) 
	              values( '$FirstName','$LastName','$Email','$Password',$Mobile)";

	echo "<header>   You have successfully logged in. </header>";
	include('homepage.html');
	
mysqli_query($conn,$sql);
mysqli_close($conn);

?>
