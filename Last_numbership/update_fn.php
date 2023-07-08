<?php
    session_start(); /*啟動session */
	include("../configure.php"); /*取得資料庫連線 */
    $gid=isset($_GET["id"])?$_GET["id"]:null; /*接收過來的資料 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $pwd=isset($_POST["pwd"])?$_POST["pwd"]:null;
    $pwd2=isset($_POST["pwd2"])?$_POST["pwd2"]:null;
    $phone=isset($_POST["phone"])?$_POST["phone"]:null;
    //echo $id,$pwd,$pwd2,$phone;

    /*如果所有值都不為空就執行 */
    if( $pwd != null and $pwd2!= null and $phone != null ){
      
            /*SQL語法 */
            $query = "SELECT * FROM `number` WHERE `no` = '$gid'";
            $result = $link->query($query);
            $res="";
            foreach($result as $row ){
            /* 如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                if($_SESSION['username'] != null  and $_SESSION['username'] == $row["username"]){ 
                    /*判斷密碼及確認密碼如果一樣就執行*/
                    if($pwd == $pwd2){
                        /*修改資料表欄位內容 */
                        $sqq="UPDATE `number` SET `password`='$pwd',`celephone`='$phone' WHERE `no`= $gid";
                        $res=$link->exec($sqq);
                    }
                    /*密碼及確認密碼不一樣就執行*/
                     else{
                        echo "<script>alert('修改失敗!確認密碼錯誤!')</script>";
                        echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
                    }
                }
            }
            /*如果成功執行 */
            if($res){
                echo "<script>alert('修改成功!請重新登入')</script>";
                echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
            }
        }
    /*否則有一個值為空就執行 */
    else{
        echo "<script>alert('修改失敗!請輸入所有欄位資料!')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='numbership.php'>";
    }
?>