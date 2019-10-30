<?php
    mb_internal_encoding("utf-8");
    $pdo=new pdo("mysql:dbname=lesson01; host=localhost;","root","mysql");
    $pdo->exec("insert into 4each_keijiban(handlename,title,comments)VALUES('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comment']."');");
    header("Location:index.php");
?>