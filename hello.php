<!DOCTYPE html>
<html lang="en">
<head>
  <title>헬로페이지</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
include 'menu.php' // 메뉴 파일을 포함
?>

<div class="container-fluid">
  
  <?php
	for($i=1; $i<=10; $i=$i+1)
	{
		echo $i."hello world! <br />";
	}
?>
</div>

</body>
</html>

    
