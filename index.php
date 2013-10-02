<?php
	if(isset($_POST['submit'])) {
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$email=$_POST['email'];
		if(empty($fname) || empty($lname) ||empty($email)){
			$status="please enter all information";
		} else {
			try{
				$conn = new PDO('mysql:host=localhost;dbname=training','root','manohar');
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$query="insert into users(fname,lname,email) values('$fname','$lname','$email');";
				$result=$conn->query($query);
				if($result){
					$status="registration successfull";
				}
			} catch(PDOException $err) {
					echo "ERROR :.$err";
				}
		}
		echo "$status";	
	}
	require "index.tmpl.php"
?>