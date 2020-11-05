<?php

//データベースに接続する
$mysqli = new mysqli('localhost','root','root','members_20201022');

//SQLを組み立てる
$sql = "INSERT INTO members(name,group) VALUES('".$_POST['name']."','".$_POST['group']."')";

//組み立てたSQLを確認する
echo($sql);

//SQLを実行する
$mysqli->query($sql);

//データベースを切断する
$mysqli->close();
?>
