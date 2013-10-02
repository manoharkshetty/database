<?php 
	require "functions.php";
	use App\db;
	$result=db\connect($config,"blogs");
	require "index.view.php";
?>
