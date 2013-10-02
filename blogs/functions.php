<?php namespace App\db;

	$config=array(
		'username'=>'root',
		'password'=>'manohar',
		'database'=> 'blogs'
	);

	function connect($config,$tablename,$limit=10){
		try{
		$conn=new  \PDO("mysql:host=localhost;dbname=blogs",$config['username'],$config['password']);
		$stmt=$conn->prepare('select * from blogs;');
		$stmt->execute();
		$result=$stmt->fetchAll();
		//var_dump($result);
		return $result?$result:false;
		} catch(PDOException $e) {
			echo "ERROR:".$E->getmessage();
		}
	}
?>


