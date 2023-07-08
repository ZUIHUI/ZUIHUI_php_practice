<?php
	session_start(); /*啟動session */
	include ("../configure.php"); /*取得資料庫連線 */
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>新增紀錄</title>
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
<div align=center>
	<table>
		<tr align=center>
			<td width ="100%">
				<h1>Message Board</h1>
			</td>
		</tr>
		<form method="POST">
			<tr align=left>
				<td width="100%">
					<div class="mb-3">
  						<label class="form-label">標題:</label>
						<input type="text" name="title" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon2">
					</div>
				</td>
			</tr>
			<tr align=left>
				<td width="100%">
					<div class="mb-3">
  						<label class="form-label">內文:</label>	
						<textarea class="form-control" clos="50" rows="10" name="des"></textarea>
					</div>
				</td>
			</tr>
			<tr align=center>
				<td width="100%">
					<input type="submit" class="btn btn-outline-success" value="新增">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="button" class="btn btn-outline-success" value="取消" onclick="location.href='displaynote.php'">
				</td>
			</tr>
		</form>
	</table>
</div>
<?php
  $title=isset($_POST["title"])?$_POST["title"]:null;
  $des=isset($_POST["des"])?$_POST["des"]:null;

  /*如果所有值都不為空就執行 */
  if($title!=null and $des!=null){
	/*SQL語法 插入資料表*/
    $query = "insert into `note`(`title`,`Description`) values('$title','$des')";
    $count=$link->exec($query);
	/*如果執行成功*/
	if($count){
		echo "<meta http-equiv=REFRESH CONTENT=0;url='displaynote.php'>";
	}
	/*否則執行失敗 */
	else{
		echo "<script>alert('新增失敗!')</script>";
		echo "<meta http-equiv=REFRESH CONTENT=0;url='displaynote.php'>";
	}
  }
?>
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