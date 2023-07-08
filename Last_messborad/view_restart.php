<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>重設</title>
</head>
<body>
<?php
	include ("../configure.php"); /*取得資料庫連線 */
	/*更新資料表欄位設為 "1" */
	$query="UPDATE `count` SET `num`=1";
	$count=$link->exec($query);	
?>
<meta http-equiv="refresh" content="1; url=displaynote.php" />
</body>
</html>