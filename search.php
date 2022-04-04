<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
<br>
<div class="container" algin="left">  
  <form class="form-inline" action="/action_page.php">
    <label for="email"> &nbsp;검색 : &nbsp;</label>
    <input type="email" class="form-control" id="search" placeholder="검색할 키워드" name="email">    
    &nbsp;
    <button type="submit" class="btn btn-primary"> 검색 </button>
  </form>
</div>

</body>
</html>
