<!DOCTYPE html>
<html lang="en">
<head>
  <title>php project site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- logo -->
  <a class="navbar-brand" href="/">hyeri's</a>
  
  <!-- menu -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/hello.php">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/search.php">검색</a>
    </li>
  </ul>
</nav>

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

    
