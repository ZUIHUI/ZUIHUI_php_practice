<?php
	session_start(); /*啟動session */
    include("../configure.php"); /*取得資料庫連線 */
	unset($_SESSION['username']); /*清空session */
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- Main Content -->
<?php 
	$id=isset($_POST["id"])?$_POST["id"]:null;
	$pwd=isset($_POST["pwd"])?$_POST["pwd"]:null;
	//ECHO $id;
	/*如果所有值都不為空就執行 */
	if($id != null and $pwd != null){
		/*SQL語法 */
		$query = "SELECT * FROM `number` WHERE `username` = '$id'";
		$result = $link->query($query);
		$row=$result->fetch();

		/*如果執行成功*/
		if($row){
			/*判斷執行結果回傳值是不是陣列,如果是就執行 */
			if(is_array($row)){
				/*判斷輸入帳號及密碼是否等於資料表欄位,如果有就執行 */
				if($row['username'] == $id and $row['password'] == $pwd){
					/*讓 $_SESSION['username'] = 帳號 */
					$_SESSION['username'] = $id;
					/*更新紀錄瀏覽人數資料表欄位 */
					$que="UPDATE `count` SET `num`=`num`+1";
					$count=$link->exec($que);
					echo "<script>alert('登入成功!')</script>";
					echo "<meta http-equiv=REFRESH CONTENT=0;url='../First.php'>";
				}
				/*如果輸入帳號相同但密碼不同 */
				else if($row['username'] == $id and $row['password'] != $pwd){
					echo "<script>alert('登入失敗!帳號或密碼錯誤!')</script>";
					echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
				}
			}
		}
		/*否則執行失敗 */
		else{
			echo "<script>alert('無此帳號請先註冊!')</script>";
			echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
		}
	}
	/*否則有一個值為空就執行 */
	else{
		echo "<script>alert('請輸入帳號密碼!')</script>";
		echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
	}
?>

</body>
</html>