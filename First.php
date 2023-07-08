<!DOCTYPE html>
<?php
	/*設計構想:
		神奇寶貝圖鑑
		功能:
		1.登入介面
		2.主頁面(包含 圖鑑、留言板、會員中心)
		3.神奇寶貝圖鑑
		4.留言板(新增、修改、刪除)
		5.會員中心(新增、修改、刪除、登出)
	*/
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pokemon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/icon.png" type="image/ico" />
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
}
</style>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="First.php"><h4>POKemon</h4></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <h4>Menu</h4>
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="First.php"><h4>Home</h4></a>
          </li>          
           <li class="nav-item" class="dropdown-submenu">
            <a class="nav-link" href="Last_POKE_table/poke_table.php"><h4>POke圖鑑</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Last_messborad/displaynote.php"><h4>討論區</h4></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Last_numbership/numbership.php"><h4>會員中心</h4></a>
          </li>        
        </ul>
      </div>
    </div>
  </nav>
<!-- Page Header -->
  <header class="masthead" style="background-image: url('../final_version/img/home_bg.png')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>WELLCOME TO THE POKEMON CENTER</h1>
            <span class="subheading">今天還是好天氣</span>
          </div>
        </div>
      </div>
    </div>
  </header>
<!-- Main Content -->
 	<div class="container coverflow">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Carousel -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="../final_version/img/home_pika.jpg" width="800px" height="600px" alt="First slide"  />
					<div class="carousel-caption">
						<h3 style="font-family: '華康新特明體'; color: #000000">皮卡丘</h3>
					</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../final_version/img/home_fire.jpg" width="800px" height="600px"alt="Second slide" />
					<div class="carousel-caption">
						<h3 style="font-family: '華康新特明體';color: #000000"">噴火龍</h3>
					</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../final_version/img/home_drg.jpg" width="800px" height="600px"alt="Third slide" />
					<div class="carousel-caption">
						<h3 style="font-family: '華康新特明體';color:"">裂空座</h3>
					</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../final_version/img/home_create.jpg" width="800px" height="600px"alt="Four slide" />
					<div class="carousel-caption">
						<h3 style="font-family: '華康新特明體';color: #000000"">阿爾宙斯</h3>
					</div>
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="../final_version/img/home_king.jpg" width="800px" height="600px"alt="Five slide" />
					<div class="carousel-caption">
						<h3 style="font-family: '華康新特明體';color: #000000"">鳳凰</h3>
					</div>
			</div>
			<a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#myCarousel" class="carousel-control-next" data-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <script>
	$(function(){
	$(‘.coverflow’).css(‘max-width’,$(‘.coverflow img’).width());});
  </script>
</body>
</html>