	<?php	

	   // $dbhost = "localhost";
    //    $dbname = "registration";
    //    $dbusername = "root";
    //    $dbpassword = "root123";


       $conn=new mysqli('localhost','root','','personal',"3325");
		if($conn->connect_error)
		{
			die('Connection Failed:' .$conn->connect_error);

		}


		// $conn=mysqli_connect($dbhost,$dbname,$dbusername,$dbpassword);
		// if($conn)
		// {
		// 	echo "connection ok";
		// }

		else
		{
			// echo "ok". "<br>"; 
		}

	?>