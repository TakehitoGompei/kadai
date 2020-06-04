<?php
// フォームからデータを受け取る
$no = $_POST["no"];
$sei = $_POST["sei"];
$mei = $_POST["mei"];
$seib = $_POST["seib"];
$ysei = $_POST["ysei"];
$ymei = $_POST["ymei"];


// ファイルに書き込み
$file = fopen("data/data.txt", "a");

    fwrite($file, $no."\t".$sei."\t".$mei."\t".$seib."\t".$ysei."\t".$ymei."\n");

fclose($file);


?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="read.php">表</a></li>
</ul>
</body>
</html>