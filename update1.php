<?php
 $_GET['nm'];
 $_GET['dob'];
 $_GET['ph'];
 $_GET['em'];
 $_GET['ds'];
 $_GET['sal'];
 $_GET['id'];
 include("conn.php");


?>

<html>
<head></head>
<body>
	<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h1>Registration Form</h1>
			</div>
			<div class="panel-body">
				<form action="" method="post">
					<div class="form-group">
						<label for="Name">Name</label>
						<input type="text" class="form-control" id="Name"  name="name" value="<?php echo $_GET['nm'] ?>"/>
					</div>

					<div class="form-group">
						<label for="Id">ID</label>
						<input type="text" class="form-control" id="id"  name="id" value="<?php echo $_GET['id'] ?>" />
					</div>

					<div class="form-group">
							<label for="DOB">DOB</label>
							<input type="text" class="form-control" id="dob"  name="dob"  value="<?php echo $_GET['dob'] ?>"/>
					</div>

					<div class="form-group">
							<label for="Phoneno">PhoneNo</label>
							<input type="text" class="form-control" id="phoneno" name="phoneno" value="<?php echo $_GET['ph'] ?>" />
					</div>
					<div class="form-group">
							<label for="Emailid">EMailId</label>
							<input type="text" class="form-control" id="emailid" name="emailid" value="<?php echo $_GET['em'] ?>" />
					</div>

					<div class="form-group">
							<label for="Designation">Designation</label>
							<input type="text" class="form-control" id="designation" name="designation" value="<?php echo $_GET['ds'] ?>"/>
					</div>



					<div class="form-group">
							<label for="Salary">Salary</label>
							<input type="text" class="form-control" id="salary" name="salary" value="<?php echo $_GET['sal'] ?>"/>
					</div>


					<input type="submit" name="submit" value="Update">

				</form>
			</div>
				


				
			</div>
		



			<?php

			 if(isset($_POST['submit']))
			 {
			 	$name=$_POST['name'];
			 	$dob=$_POST['dob'];
			 	$emailid=$_POST['emailid'];
			 	$phoneno=$_POST['phoneno'];
			 	$id=$_POST['id'];
			 	$designation=$_POST['designation'];
			 	$salary=$_POST['salary'];
			 	// $query="UPDATE personal SET Dob='$dob', Name='$name',Email='$emailid',Phoneno='$phoneno' WHERE Id='$id'";




			 	 // $query="UPDATE personal.Id ,professional.Id from personal INNER JOIN professional ON personal.Id = professional.Id  SET Dob='$dob', Name='$name',Email='$emailid',Phoneno='$phoneno',Designation='$designation',Salary='$salary' WHERE personal.Id='$id'";
			 	
$query="UPDATE personal INNER JOIN professional ON personal.Id = professional.Id SET salary = '$salary' , Email='$emailid',Phoneno='$phoneno',Designation='$designation',Name='$name' where professional.Id=$id";
			 	// $query="UPDATE personal,professional and INNER JOIN professional ON personal.Id=professional.Id and personal.Id = '$id'";
			 	// $data=mysqli_query($conn,$query);


// if($data){
// while ($result=mysqli_fetch_assoc($data)) {
// echo " <table><tr>
// <td>".$result['Name']."</td>
// <td>".$result['Dob']."</td>
// <td>".$result['Email']."</td>
// 			<td>".$result['Phoneno']."</td>
// 			<td>".$result['Salary']."</td>
// 			<td>".$result['Designation']."</td>
// 				<td>".$result['Id']."</td>

// </tr></table>";
// }
// }



			
		 	$data=mysqli_query($conn,$query);
			 	if($data)
			 	{
			 		echo "<font color='green'>Record Updated successfully.<a href='display1.php'>Check the updated List</a>";
			 	}
			 	else{
			 		echo "<font color='red'>Record Not Updated.";;
			 	}
			 }
			 else{
			 	echo  "<font color='blue'>click on button to save changes";
			 }

			 ?>


