<!DOCTYPE html>
<?php
  session_start(); /*啟動session */
	include("../configure.php"); /*取得資料庫連線 */
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>會員中心</title>
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
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="../First.php"><h4>POKemon</h4></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <h4>Menu</h4>
    <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../First.php"><h4>Home</h4></a>
        </li>          
        <li class="nav-item">
          <a class="nav-link" href="../Last_POKE_table/poke_table.php"><h4>POke圖鑑</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Last_messborad/displaynote.php"><h4>討論區</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="numbership.php"><h4>會員中心</h4></a>
        </li>        
      </ul>
    </div>
  </div>
</nav>
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
  </div>
</header>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <h1 class="post-subtitle">POKEMON 會員中心</h1>
        <div align="center">
          <table align="center" width="100%" height="100%" cellpadding="20" cellspacing="0" border="0">
				    <tr align="left" height="20" style="font-family: '';"> 
              <td width="300"  style="font-family: '';">Username : </td>
              <?php 
                /*SQL語法 */
                $query = "SELECT * FROM `number` WHERE 1";
                $result = $link->query($query);
                foreach($result as $row ){
                  /*在登入成功時讓 $_SESSION['username'] = 帳號, 如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                  if($_SESSION['username'] != null  and $_SESSION['username'] == $row["username"]){ 
                    echo "<td align=\"center\" style=\"font-family: '華康新特明體';\">".$row["username"]."</td>";
                  }
                }
              ?>
            </tr>
            <tr align="left" height="20" style="font-family: '';">
              <td width="300"  style="font-family: '';">Password : </td>
              <?php
                /*SQL語法 */
                $query = "SELECT * FROM `number` WHERE 1";
                $result = $link->query($query);
                foreach($result as $row ){
                  /*在登入成功時讓 $_SESSION['username'] = 帳號, 如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                  if($_SESSION['username'] != null  and $_SESSION['username'] == $row["username"]){ 
                    echo "<td align=\"center\" style=\"font-family: '華康新特明體';\">".$row["password"]."</td>";
                  }
                }
              ?>
            </tr>
            <tr align="left" height="20" style="font-family: '';">
              <td width="300"  style="font-family: '';">CelePhone : </td>
              <?php 
                /*SQL語法 */
                $query = "SELECT * FROM `number` WHERE 1";
                $result = $link->query($query);
                foreach($result as $row ){
                  /*在登入成功時讓 $_SESSION['username'] = 帳號, 如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                  if($_SESSION['username'] != null and $_SESSION['username'] == $row["username"]){ 
                    echo "<td align=\"center\" style=\"font-family: '華康新特明體';\">".$row["celephone"]."</td>";
                  }
                }
              ?>
            </tr>
            <?php 
                /*SQL語法 */
                $query = "SELECT * FROM `number` WHERE 1";
                $result = $link->query($query);
                foreach($result as $row ){
                  /*在登入成功時讓 $_SESSION['username'] = 帳號, 如果 $_SESSION['username'] 不為空且等於帳號資料表裡的帳號就執行*/
                  if($_SESSION['username'] != null  and $_SESSION['username'] == $row["username"]){
                    echo"
                    <tr>
                      <td>
                        <div class=\"clearfix\">
                          <a class=\"btn btn-outline-success\" href=\"register.php\">新增</a>
                        </div>
                      </td>
                      <td>
                        <div class=\"clearfix\">
                          <a class=\"btn btn-outline-success\" href=\"update.php?id=".$row["no"]."\">修改</a>
                        </div>
                      </td>
                      <td>
                        <div class=\"clearfix\">
                          <a class=\"btn btn-outline-success\" href=\"delete.php?id=".$row["no"]."\">刪除</a>
                        </div>
                      </td>
                      <td>
                        <div class=\"clearfix\">
                          <a class=\"btn btn-outline-success\" href=\"log_out.php\">登出 &rarr;</a>
                        </div>
                      </td>
                    </tr>";
                }
              }
            ?>
          </table>
          <?php //echo $_SESSION['username']?>
        </div>
      </div>
    </div>
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