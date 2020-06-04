<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>


<table border="1">
<?php
$fp = fopen("data/data.txt","r");        
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($no,$sei,$mei,$seib,$ysei,$ymei) = explode("\t",$line);
        print "<tr>\n";
        print "<td>$no</td><td>$sei</td><td>$mei</td>";
        print "<td>$seib</td><td>$ysei</td><td>$ymei</td>\n";
        print "</tr>\n";
    }
}
fclose($fp);


?>
</table>





