<?php
    session_start(); /*啟動session */
	include("../configure.php"); /*取得資料庫連線 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $id=isset($_POST["id"])?$_POST["id"]:null;
    $pwd=isset($_POST["pwd"])?$_POST["pwd"]:null;
    $pwd2=isset($_POST["pwd2"])?$_POST["pwd2"]:null;

    /*如果所有值都不為空就執行 */
    if($id != null and $pwd != null and $pwd2 != null){
        $que= "SELECT * FROM `number` WHERE `username` = '$id'";
		$res = $link->query($que);
		$ro=$res->fetch();

		/*如果執行成功*/
		if($ro){
            /*SQL語法 */
            $query = "SELECT * FROM `number` WHERE `username`='$id'";
            $result = $link->query($query);
            $x="";
            foreach($result as $row ){
            /*如果 $_SESSION['username'] 不為空*/
                if($_SESSION['username'] != null ){ 
                    if($pwd == $pwd2){
                        if($pwd == $row["password"]){
                            $sql="DELETE FROM `number` WHERE `username`='$id'";
                            $x=$link->exec($sql);
                        }
                        else{
                            echo "<script>alert('刪除失敗!密碼錯誤!')</script>";
                            echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
                        }
                    }
                    else{
                        echo "<script>alert('刪除失敗!確認密碼錯誤!')</script>";
                        echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
                    }
                }
            }
            /*如果執行成功*/
            if($x){
                unset($_SESSION['username']); /*清空session */
                echo "<script>alert('刪除成功!請重新登入')</script>";
                echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
            }
        }
        /*否則執行失敗 */
	    else{
		    echo "<script>alert('無此帳號!')</script>";
		    echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
	    }
    }
    /*否則有一個值為空就執行 */
    else{
        echo "<script>alert('請輸入要刪除的帳號資訊!!')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
    }
?>