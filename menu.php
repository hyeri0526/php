<?php   
  session_start(); //서버에 클라이언트 정보 저장공간: 세션
  
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="/">hyeri's</a>
  
  <!-- Links -->
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
    <li class="nav-item">
      <a class="nav-link" href="/slist.php">검색리스트</a>
    </li>
    <li class="nav-item">
      <?
      if(!isset($_SESSION['userid'])) {  //세션에 값이 없으면, 즉 로그인이 안되어있으면
        echo '<a class="nav-link" href="login.php">로그인</a> ';          
      }  
      else {
        echo '<a class="nav-link" href="/logout.php">로그아웃</a> ';  
      }       
      ?>
    </li>
  </ul>
</nav>