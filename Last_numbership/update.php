<!DOCTYPE html>
<?php
  session_start(); /*啟動session */
	include("../configure.php"); /*取得資料庫連線 */

  $id=$_GET["id"]; /*接收傳遞過來的id */
      
  $query = "SELECT `username`,`password`,`celephone` FROM `number` WHERE `no`='$id'"; /*SQL語法 取出與接收id相同的資料 */
  $result = $link->query($query); /*取得執行後結果 */
  $user_o=""; /*定義3個變數存放資料 */
  $pwd_o="";
  $phone_o="";

  foreach ($result as $row){ /*把執行後結果用迴圈丟給變數 */
    $user_o=$row["username"];
    $pwd_o =$row["password"];
    $phone_o=$row["celephone"];
  }
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>更新會員</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/icon.png" type="image/ico" />
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Custom fonts for this template -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css">

	<!-- Custom styles for this template -->
	<link href="../css/clean-blog.min.css" rel="stylesheet">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap');
body{
  font-family: 'Noto Serif TC', serif;
};
</style>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/home_bg.png')">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>WELLCOME TO THE POKEMON CENTER</h1>
            <span class="subheading">POKEMON ~!</span>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- Main Content -->
<div class="container" align="center">
  <h1>POKEMON CENTER ALTER</h1><br />
    <div class="col-lg-6 col-md-5 mx-auto">
      <form method="POST" action="
                    <?php 
                      /*SQL語法 取出與接收id相同的資料 */
                      $query = "SELECT * FROM `number` WHERE `no`='$id'";   
                      /*取得執行後結果 */
                      $result = $link->query($query); 
                      /*取得帳號資料,送出時把要修改帳號資料的id欄位傳送給update_fn.php */
                      foreach($result as $row ){ 
                      /*如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                        if($_SESSION['username'] != null  and $_SESSION['username'] == $row["username"]){
                            echo "update_fn.php?id=",$row["no"],"";
                        }
                      }
                    ?>">
        <div class="input-group mb-3" align="center" >
          <?php
          /*利用$_SESSION['username']確保沒有權限的人無法修改*/
          if($_SESSION['username'] != null){ 
              echo"<input type=\"text\"  disabled=\"disabled\" class=\"form-control\" placeholder=\"$user_o\" aria-label=\"$user_o\" aria-describedby=\"basic-addon2\"><br /><br />";
          }
          ?>
        </div>
        <div class="input-group mb-3" align="center" >
          <?php
          /*利用$_SESSION['username']確保沒有權限的人無法修改*/
            if($_SESSION['username'] != null){ 
                echo"<input type=\"password\" name=\"pwd\" value=\"$pwd_o\" class=\"form-control\" placeholder=\"Alter Password\" aria-label=\"Alter Password\" aria-describedby=\"basic-addon2\"><br /><br />";
            }
          ?>
        </div>
        <div class="input-group mb-3" align="center" >
          <?php
          /*利用$_SESSION['username']確保沒有權限的人無法修改*/
            if($_SESSION['username'] != null){ 
                echo"<input type=\"password\" name=\"pwd2\" value=\"$pwd_o\" class=\"form-control\" placeholder=\"Confirm Alter Password\" aria-label=\"Confirm Alter Password\" aria-describedby=\"basic-addon2\"><br /><br />";
            }
          ?>
        </div>
        <div class="input-group mb-3" align="center" >
          <?php
          /*利用$_SESSION['username']確保沒有權限的人無法修改*/
            if($_SESSION['username'] != null){ 
                echo"<input type=\"text\" name=\"phone\" value=\"$phone_o\"class=\"form-control\" placeholder=\"Alter CelePhone\" aria-label=\"Alter CelePhone\" aria-describedby=\"basic-addon2\"><br /><br />";
            }
          ?>
        </div>
            <table align="center" width="100%">
              <tr>
                <td>
                  <div class="clearfix">
                      <input type="submit" class="btn btn-outline-success" value="修改">
                  </div>
                  </td>
                  <td>
                    <div class="clearfix">
                    <input type="button"class="btn btn-outline-success" value="返回" onclick="location.href='numbership.php'">
                    </div>
                  </td>
                </tr>
              </table>
        </form>
    </div>
</div>
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">          
        <p class="copyright text-muted">Copyright &copy; 082214145 NTUNHS IM FINAL VERSION</p>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>
</body>
</html>