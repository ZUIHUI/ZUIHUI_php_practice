<!DOCTYPE html>
<?php
    include("../configure.php"); /*取得資料庫連線 */
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title>Poke圖鑑</title>
	<link rel="icon" href="../img/icon.png" type="image/ico" />
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../vendor/bootstrap/js/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- Custom fonts for this template -->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css">

	<!-- Custom styles for this template -->
	<link href="../vendor/bootstrap/css/clean-blog.min.css" rel="stylesheet">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap');
html {
  scroll-behavior: smooth;
}
</style>
<!-- Navigation -->
<SECTION ID="3"><nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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
					<a class="nav-link" href="poke_table.php"><h4>POke圖鑑</h4></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Last_messborad/displaynote.php"><h4>討論區</h4></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Last_numbership/numbership.php"><h4>會員中心</h4></a>
				</li>        
			</ul>
      	</div>
    </div>
</nav></SECTION>
<!-- Page Header -->
<header class="masthead" style="background-image: url('../img/home_bg.png')">
	<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>WELLCOME TO THE POKEMON CENTER</h1>
						<span class="subheading">POKEMON Illustrated Book</span><br />
						<span  class="clearfix">
							<button id="12" type="button" class="btn btn-light btn-lg" ><a href="#1">Pokemon 圖鑑</a></button>
							<button  id="123" type="button" class="btn btn-light btn-lg"><a href="#2">Pokemon 技能表</a></button>
						</span>
					</div>
				</div>
			</div>
		</div>
</header>
<!-- Main Content -->
<style>
	.td{
	  width:150px;
	  overflow:auto;
	  text-align:middle;
	}
</style>
<div class="container" class="table-responsive">
	<section id="1" align="center" style="font-size: 60px; font-family: '華康新特明體';">POKEMON 圖鑑</section>
		<table class="table align-middle"  cellpadding="20" cellspacing="0" border="0" style="font-family: '華康新特明體';">
		  	<tr class="table-light" align="center">
				<td  width="300" >POKEMON</td>
				<td  class="td" >分類</td>
				<td  class="td" >屬性</td>
				<td  class="td" >技能</td>
				<td  width="300" >介紹</td>
			</tr>
			<?php
				$query = "SELECT * FROM `pokemon` WHERE `id`=`id`"; /*SQL語法 */
				$result = $link->query($query); /*取得SQL執行後的結果 */
						
				foreach ($result as $row) /*丟到迴圈一行一行取出 */
				{
					/*echo 取出的結果 */
					echo "
						<tr style=\"background-color:	#D1E9E9;\" align=\"center\">
							<td  align=\"center\" valign=\"middle\" class=\"td\" style=\"font-family: '華康新特明體' \"font-size:60px\";\"><img src=\"../img/pk_table_".$row["id"].".png\" width=\"275px\" height=\"275px\"><br />".$row["name"]."</td>
							<td  align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體';\">".$row["race"]."</td>
							<td  align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體';\">".$row["enable"]."</td>
							<td  align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體';\">".$row["sk_name"]."</td>
							<td  align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體' \"font-size:100px\";\">".nl2br($row["pk_des"])."</td>
						</tr>";
				}
			?>
		</table>	
</div>
<div class="container" class="row" align="center" class="table-responsive">
	<SECTION id="2" style="font-size: 60px; font-family: '華康新特明體';">POKEMON 技能</SECTION>
		<table class="table align-middle" align="center" width="100%" cellpadding="20" cellspacing="0" border="0" style="font-family: '華康新特明體';">
			<tr class="table-light" align="center">
				<td class="td">技能</td>
				<td class="td">技能屬性</td>
				<td width="300">技能推薦</td>
			</tr>
			<?php
				$query = "SELECT * FROM `pk_skill` WHERE 1"; /*SQL語法 */
				$result = $link->query($query); /*取得SQL執行後的結果 */
					
				foreach ($result as $row) /*丟到迴圈一行一行取出 */
				{
					/*echo 取出的結果 */
					echo "
					<tr align=center style=\"background-color:	#D1E9E9;\">
						<td align=\"center\" valign=\"middle\" align=\"left\" style=\"font-family: '華康新特明體';\">".$row["name"]."</td>
						<td align=\"center\" valign=\"middle\" align=\"left\" style=\"font-family: '華康新特明體';\">".$row["enable"]."</td>
						<td align=\"center\" valign=\"middle\" align=\"left\" style=\"font-family: '華康新特明體';\">".$row["des"]."</td>
					</tr>";
				}
			?>
		 </table>
</div>
<!-- Footer -->
<footer>
	<div class="container">
      	<div class="row">
        	<div class="col-lg-8 col-md-10 mx-auto" align="center"> 
				<span class="clearfix">
					<button  type="button" class="btn btn-warning btn-lg" ><a href="#1">Pokemon 圖鑑</a></button>
					<button  type="button" class="btn btn-outline-dark btn-lg" ><a href="#3">Go To TOP</a></button>
					<button  type="button" class="btn btn-warning btn-lg"><a href="#2">Pokemon 技能表</a></button>
				</span>     
          		<p class="copyright text-muted">Copyright &copy; 082214145 NTUNHS IM FINAL VERSION</p>
        	</div>
      	</div>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="../vendor/bootstrap/js/clean-blog.min.js"></script>
<script>
$(function(){
  // 當<a>連結按鈕click時, 讓整頁慢慢滑動到指定位置=============================
  $("a").on('click', function(event) {
    // this.hash 是取得目前URL中的錨點位置,例如:#section1
    // 當 this.hash (錨點位置) 不是空的時, 也就是有指定滑動到錨點位置時
    if (this.hash !== "") {
      // 阻止<a>連結被click時執行連結工作 (雷同return false, 但return false通常寫在最後)
      event.preventDefault();
      // 設定 hash 變數, 記錄目前的錨點
      var hash = this.hash;
      // 控制 html,body 執行 animate 動畫, 讓捲出的距離 = 目前錨點位置的 offset().top 座標
      $('html, body').stop().animate({ scrollTop: $(hash).offset().top }, 800, function(){
        // 將錨點名稱加到URL網址列的後方
        window.location.hash = hash;
      });
    } // if end 
  }); // click end
});
</script>
</body>
</html>