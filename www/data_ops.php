<?php
	/* -Andy 
	$ops = $_POST["op"="getPosts"); //TEST CASE
	*/
	
	if($op = "getPosts"){
		$arr = getPosts();
		$s = json_encode($arr);
		print($s);
	}
?> 
