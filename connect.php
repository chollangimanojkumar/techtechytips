<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$fathername=$_POST['fathername'];
	$emailid=$_POST['emailid'];
	$phonenumber=$_POST['phonenumber'];
	$dob=$_POST['dob'];
	$gender=$_POST['Gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	//DB code
	$conn=new mysqli('localhost','root','','techtipsdb');
	//$conn=new mysqli('url','dbusername','xamppwd','dbname')//
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into registration(username,password,firstname,lastname,fathername,emailid,phonenumber,dob,gender,address,country) values(?,?,?,?,?,?,?,?,?,?,?)");			//query//
		//bind to specify datatypes (i-int,d-double,s-string,b-BLOB)//
		$stmt->bind_param("ssssssissss",$username,$password,$firstname,$lastname,$fathername,$emailid,$phonenumber,$dob,$gender,$address,$country);
		$stmt->execute(); //executing query//
		echo "registered successfully...";
		sleep(2);
		echo "<script>location.href='loginform.html'</script>";
		//header('Refresh: 2; URL=loginform.html'); 
		$stmt->close();
		$conn->close();
		
		//header("Location: loginform.html"); 
  		exit; 
	}


?>