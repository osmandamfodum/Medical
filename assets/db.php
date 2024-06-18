<?php 
    $con = new mysqli('localhost','id22334366_store','Damfodum@79','id22334366_store');
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/dev.test/store";
?>
