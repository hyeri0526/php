<!DOCTYPE html>
<html lang="en">
<head>
  <title>검색하기</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
  include 'menu.php'
?>
<br>
<div class="container" style='float: left;'>  <!-- 왼쪽 정렬-->
  <form class="form-inline" action="/action_page.php" method="POST"> <!-- 보내는 방식 지정하지 않으면 Get -->
    <label for="keyword"> &nbsp;검색 : &nbsp;</label>
    <input type="text" class="form-control" id="search" placeholder="검색할 키워드" name="keyword">    
    &nbsp;
    <button type="submit" class="btn btn-primary" id="submit"> 검색 </button>
  </form>
</div>
</body>
  <script>	// 검색어를 입력하지 않고 검색버튼 눌렀을때
	  $(document).ready(function(){ 
		  $("#submit").click(function(){
				if($("#search").val().length == 0){ 
          alert("검색어를 입력하세요."); 
          $("#search").focus(); 
          return false; 
        }				
			});		
  	});
	</script>
</html>
