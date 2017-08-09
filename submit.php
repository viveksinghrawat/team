<?php
	//echo $op1;
$a=array();	
$a[0]   =$_POST['op1'];
$a[1]	=$_POST['op2'];
$a[2]   =$_POST['op3'];
$a[3]	=$_POST['op4'];
$a[4]	=$_POST['op5'];
$a[5]	=$_POST['op6'];
$a[6]   =$_POST['op7'];
$a[7]	=$_POST['op8'];
$a[8]	=$_POST['op9'];
$a[9]	=$_POST['op10'];

//echo $a[0]."<br>";

//$conn=mysqli_connect('localhost','root','' ,'Database: project : online quiz');
  $conn=new mysqli('localhost','root','','online quiz');
$sql="SELECT SET1 FROM CQUIZ";
$query=mysqli_query($conn,$sql);

$array=array();
$count=0;
$c=0;
while($row=mysqli_fetch_assoc($query))
{
	//echo $row[$c]."<br>";
	$array[]=$row;
	//print_r($array[0]);
	foreach($array[$c] as $data)
 {	
	if($data==$a[$c])
	{	//echo $data;	
		$count++;
	}
 }
	$c++;
}
	
	//echo $count;
	echo "<p>Result:  <p>";
	echo "Total     Questions = 10"."<br>";
	echo "Your Score  = $count /10 "."<br>";
	include('set1.html');
	mysqli_close($conn);

	
	
?>