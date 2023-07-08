<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>刪除紀錄</title>
</head>
<body>
<?php
  include ("../configure.php"); /*取得資料庫連線 */
  
  $title=isset($_GET["title"])?$_GET["title"]:null; 
  $des=isset($_GET["des"])?$_GET["des"]:null;
  $id=$_GET["id"];  /*接收傳遞過來的資料 */

  /*SQL語法 取出與接收id相同的資料 */
  $query = "DELETE FROM `note` WHERE `id`=$id";
  $count=$link->exec($query);
?>
<meta http-equiv="refresh" content="1; url=displaynote.php" />
</body>
</html>