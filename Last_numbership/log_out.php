<?php 
    session_start(); /*啟動session */
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    unset($_SESSION['username']); //將session清空
    echo "<script>alert('登出成功!')</script>";
    echo "<meta http-equiv=REFRESH CONTENT=1;url='../index.php>'";
?>