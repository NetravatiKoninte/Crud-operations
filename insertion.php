<?php
// $GLOBALS['server']="localhost";
// $GLOBALS['username']="root";
// $GLOBALS['password']=" ";
// $GLOBALS['database']="personal";


	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['emailid'];
	$designation=$_POST['designation'];
	$salary=$_POST['salary'];
	$id=$_POST['id'];

$GLOBALS['conn1']=new mysqli('localhost','root','','personal',"3325");

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
//echo "Connected successfully";    

$conn1 = mysqli_connect('localhost','root','','personal',"3325");

$sql1="INSERT INTO personal (Id,Name,Dob,Email,Phoneno) VALUES(' $id','$name','$dob','$emailid','$phoneno')";
$result1=mysqli_query($conn1,$sql1) or die(mysqli_error($conn1));
$last_id=mysqli_insert_id($conn1);
 if($result1==1)
 {
 	$sql2="INSERT INTO professional (Designation,Salary,Id) VALUES('$designation','$salary',' $last_id')";

 	 $result2=mysqli_query($conn1,$sql2) or die(mysqli_error($conn1));;

 	 if($result2==1)
 	 {
 	 	echo "Inserted";
 	 }
 }


// echo" insserted";


//mysqli_query($conn,$sql);
//mysqli_query($conn,$sql1);
// if(mysqli_multi_query($conn1, $sql1)){  
//     echo "New records created successfully";}


mysqli_close($conn1);
?>
