<?php
	mb_internal_encoding("utf8");

    $pdo=new PDO("mysql:dbname=keiji01;host=localhost;","root","mysql");

	$pdo->exec("insert into 4eache_keijiban(name,title,coment)
	values('".$_POST['name']."','".$_POST['title']."','".$_POST['coment']."');");

	header("Location:http://localhost/4each_keijiban1226/index.php");

?>
