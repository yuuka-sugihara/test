<?php
mb_internal_encoding("utf8");

$pdo= new PDO(
    "mysql:dbname=lesson01;host=localhost;",
    "root",
    "root"
);   

$pdo->exec(
    "insert into diworks_keijiban(handlename,title,comments)
    values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');"
);

//var_dump(insert.php);

header("Location:http://localhost:8888/diworks_keijiban/index.php");

?>