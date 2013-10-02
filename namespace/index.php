<?php
	require "function.php";
	use DbApp\db;
	$result=db\connect();
	//$result=DbApp\db\connect();
	echo $result;
?>