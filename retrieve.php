<?php
$id=1;
try{

	$conn= 	new PDO('mysql:host=localhost;dbname=training',"root","manohar");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt=$conn->prepare("select * from users where uid= :id");
	// $stmt->execute(array(
	// 	'id' => $id
	// 	));

	$stmt->bindParam(':id',$id, PDO::PARAM_INT);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_OBJ)){
		print_r($row);
	}

} catch (PDOException $e) {
	echo "error:". $e->getmessage();
}

 