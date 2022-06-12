<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
//文字作成

$c = ",";

$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$sex.$c.$age.$c.$q1.$c.$q2.$c.$q3;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>回答いただき有難うございます！</h1>

</body>
</html>









}