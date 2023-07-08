<!DOCTYPE html>
<?php 
	session_start(); /*啟動session */
	include ("../configure.php"); /*取得資料庫連線 */
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>留言板</title>
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
	<link rel="stylesheet" type="" href="_3.css">
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&display=swap');
body{
  	font-family: 'Noto Serif TC', serif;
  	background-color: #ffffff;
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg stroke='%23CCC' stroke-width='0' %3E%3Crect fill='%23F5F5F5' x='-60' y='-60' width='110' height='240'/%3E%3C/g%3E%3C/svg%3E");
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
				<a class="nav-link" href="displaynote.php"><h4>討論區</h4></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Last_numbership/numbership.php"><h4>會員中心</h4></a>
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
            			<span class="subheading">Message Board</span>
          			</div>
        		</div>
      		</div>
    	</div>
	</div>
</header>
<!-- Main Content -->
<div class="container" class="row" align="center">
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
			<h1 style="font-family: '華康新特明體';">討論區</h1>
			<table align="center" width="100%" cellpadding="3" cellspacing="0" border="1">
				<tr align="center"><span class="subheading" style="font-family: '華康新特明體';">瀏覽人數&nbsp;:&nbsp;
					<?php
						/*SQL語法 */
						$qqq = "SELECT * FROM `number` WHERE 1";
						$resq = $link->query($qqq);
						/*設一個指標 */
						$k=0;
						foreach ($resq as $row){
							/*當 當前$_SESSION['username'] = 登入帳號時*/
							if($row['username']==$_SESSION['username']){
								/*k=1 */
								$k=1;
							}
							/*否則讓 k=0 */
							else{
								$k=0;
							}
							/*當 k=0 時 */
							if($k=0){
								/*更新瀏覽人數欄位 +1 */
								$que="UPDATE `count` SET `num`=`num`+1";
								$count=$link->exec($que);
							}
						}
						/*SQL語法 */
						$qq = "SELECT `num` FROM `count` WHERE 1";
						$res = $link->query($qq);
						/*顯示圖片數字 */
						foreach ($res as $rows){
							$string=strlen($rows["num"]);
							for($i=0;$i<$string;$i++){
								echo "<img src=001/".substr($rows["num"],$i,1).".gif width=20 height=20/>";
							}
						}
					?>
					</tr>
					<tr align="center" bgcolor="#FFECF5">
					  <td width="300"><span class="subheading" style="font-family: '華康新特明體';">發佈日期</span></td>
					  <td width="300"><span class="subheading" style="font-family: '華康新特明體';">標題</span></td>
					  <td width="1000"><span class="subheading" style="font-family: '華康新特明體';">發 &nbsp; 佈 &nbsp; 訊 &nbsp; 息</span></td>
					  <td width="200"><span class="subheading" style="font-family: '華康新特明體';">修改</span></td>
					  <td width="200"><span class="subheading" style="font-family: '華康新特明體';">刪除</span></td>
					</tr>
				<?php
					// 建立與MySQL資料庫的連線
					$query = "SELECT * FROM `note` WHERE 1";
					$result = $link->query($query);
					foreach ($result as $row)							
					{
						echo "
						<tr align=center bgcolor=\"#FFEECC\">
						<td align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體';\">".$row["TIME"]."</td>
						<td align=\"center\" valign=\"middle\" style=\"font-family: '華康新特明體';\">".$row["title"]."</td>
						<td align=\"left\" valign=\"middle\"  style=\"font-family: '華康新特明體';\">".nl2br($row["Description"])."</td>
						<td align=\"center\" valign=\"middle\"  style=\"font-family: '華康新特明體'; color:#000088;\"><a href='update.php?id=".$row["id"]."'>更新</a></td>
						<td align=\"center\" valign=\"middle\"  style=\"font-family: '華康新特明體'; color:#000088;\"><a href='removenote.php?id=".$row["id"]."'>刪除</a></td>
					  </tr>";
					}
				?>
			</table><br /><br />
			<table>
				<tr align=center>
				  	<td width="50">
						<form  action="addnote1.php">
					  		<input class="btn btn-light" type="submit" value="新增">
						</form><br /><br />
						<form>
					  		<input class="btn btn-light" type="button" value="重設瀏覽人數" onclick="location.href='view_restart.php'"></form></span>
						</form>
				  	</td>
				</tr>
			</table>
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
