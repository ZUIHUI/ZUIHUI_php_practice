<?php
	include("../configure.php"); /*取得資料庫連線 */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $id=isset($_POST["id"])?$_POST["id"]:null;
    $pwd=isset($_POST["pwd"])?$_POST["pwd"]:null;
    $pwd2=isset($_POST["pwd2"])?$_POST["pwd2"]:null;
    $phone=isset($_POST["phone"])?$_POST["phone"]:null;

    /*如果所有值都不為空就執行 */
    if($id != null and $pwd != null and $pwd2 != null and $phone != null){
        /*SQL語法 */
        $query = "SELECT * FROM `number` WHERE `username` = '$id'";
        $result = $link->query($query);
        $row=$result->fetch();
        /*如果執行成功*/
        if($row){
            echo "<script>alert('註冊失敗!此帳號已被使用!')</script>";
            echo "<meta http-equiv=REFRESH CONTENT=0;url='register.php'>";
        }
        /*否則執行失敗 */
        else{
            /*判斷密碼及確認密碼如果一樣就執行*/
            if( $pwd == $pwd2){
                /*SQL語法 */
                $sql="INSERT INTO `number`(`username`,`password`,`celephone`) VALUES('$id','$pwd','$phone')";
                $x=$link->exec($sql);
                /*如果執行成功*/
                if($x){
                    echo "<script>alert('註冊成功!請登入')</script>";
                    echo "<meta http-equiv=REFRESH CONTENT=0;url='../index.php'>";
                }
                /*否則執行失敗 */
                else{
                    echo "<script>alert('註冊失敗!')</script>";
                    echo "<meta http-equiv=REFRESH CONTENT=0;url='register.php'>";
                }
            }
            /*密碼及確認密碼不一樣就執行*/
            else{
                echo "<script>alert('註冊失敗!確認密碼錯誤!')</script>";
                echo "<meta http-equiv=REFRESH CONTENT=0;url='register.php'>";
            }
        }
    }
    /*否則有一個值為空就執行 */
    else{
        echo "<script>alert('請輸入註冊資料!')</script>";
        echo "<meta http-equiv=REFRESH CONTENT=0;url='register.php'>";
    }
?>