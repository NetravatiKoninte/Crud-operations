<style >
td{
	padding:10px;
}
</style>



<?php

include("conn.php");
error_reporting(0);
$query="SELECT * FROM personal INNER JOIN professional ON personal.Id=professional.Id  ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
// echo $total;





if($total!=0)
{
  
?>
	
	<table>
		<tr>
			<td><b>Name</b></td>
			<td><b>Dob</b></td>
			<td><b>Email</b></td>
			<th>Phoneno</th>
			<td><b>Salary</b></td>
			<td><b>Designation</b></td>
			<td><b>Id</b></td>
			<th colspan="2">Operations</th>

		</tr>
	

	<?php 
	while ($result=mysqli_fetch_assoc($data)) {
		echo " <tr>
			<td>".$result['Name']."</td>
			<td>".$result['Dob']."</td>
			<td>".$result['Email']."</td>
			<td>".$result['Phoneno']."</td>
			<td>".$result['Salary']."</td>
			<td>".$result['Designation']."</td>
				<td>".$result['Id']."</td>

			<td><a href='update1.php? nm=$result[Name] & dob=$result[Dob] & ph=$result[Phoneno] &em=$result[Email] &ds=$result[Designation] & sal=$result[Salary] & id=$result[Id]'>Edit</a></td>
			<td><a href='delete.php? id=$result[Id]'>Delete</td>

			</tr>";
	}
}
else{
	echo "No record found";
}
?>


</table>