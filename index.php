<!DOCTYPE html>
<?php
	session_start(); //啟動session
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/icon.png" type="image/ico" />
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Custom fonts for this template -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css">

	<!-- Custom styles for this template -->
	<link href="css/clean-blog.min.css" rel="stylesheet">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap');
body{
  font-family: 'Noto Serif TC', serif;
};
</style>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home_bg.png')">
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
<div class="container" align="center">
  <h1>WELLCOME TO THE POKEMON CENTER</h1><br />
  <div class="col-lg-5 col-md-6 mx-auto">
	  <form method="POST" action="Last_numbership/connect.php">
      <div class="input-group mb-3" align="center" >
        <input type="text" name="id"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2"><br /><br />
      </div>
      <div class="input-group mb-3" align="center">
        <input type="password" name="pwd"  class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2"><br /><br />
      </div>
      <input class="btn btn-light" type="submit" value="登入" ><br /><br /><br /><br />
      <a href="Last_numbership/register.php" class="link-info">還沒註冊嗎?馬上註冊</a>
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>
</body>
</html>