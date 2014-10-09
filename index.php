<!DOCTYPE html>
<html lang="CN_zh">
<head>
	<title>php测试</title>
</head>
<body>
<?php 
$fp = fopen('text.txt', 'r');
$order = fgetcsv($fp,100,'-');
echo $order[1];
?>
</body>
</html>