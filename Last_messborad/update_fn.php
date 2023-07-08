<?php
  session_start();
  include("../configure.php");
  /*接收傳遞過來的資料 */
  $id=isset($_GET["id"])?$_GET["id"]:null; 
  /*SQL語法 取出與接收id相同的資料 */

  $title=isset($_POST["title"])?$_POST["title"]:null;
  $des=isset($_POST["des"])?$_POST["des"]:null;  
  /*如果所有值都不為空就執行 */
  if($title!=null and $des!=null){
	/*SQL語法 */
    $query = "UPDATE `Note` SET `Title`='$title',`Description`='$des' WHERE `id`=$id";
    $count=$link->exec($query);

    echo "<script>alert('修改成功!')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='displaynote.php'>";
  }
  /*否則有一個值為空就執行 */
  else{
    echo "<script>alert('修改失敗!請輸入所有欄位資料!')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=0;url='displaynote.php'>";
  }
?>