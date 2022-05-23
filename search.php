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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body>
<?php 
  include 'menu.php'
?>
<br>
<div class="container" style='float: left;'>  <!-- 왼쪽 정렬-->
  <div class="form-inline"> <!-- 보내는 방식 지정하지 않으면 Get -->
    <label for="keyword"> &nbsp;검색 : &nbsp;</label>
    <input type="text" class="form-control" id="keyword" placeholder="검색할 키워드" name="keyword">    
    &nbsp;
    <button type="submit" class="btn btn-primary" id="submit"> 검색 </button>
  </div>
  <table class="table table-hover">
    <thead>
         <tr>
          <th>검색어</th>
           <th>검색횟수</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
<br>

</body>
  <script>	
	  $(document).ready(function(){ 
		  $("#submit").click(function(){
				if($("#keyword").val().length == 0){ // 검색어를 입력하지 않고 검색버튼 눌렀을때
          alert("검색어를 입력하세요."); 
          $("#keyword").focus(); 
          return false; 
        }
        $.post("action_page.php",// Ajax 제이쿼리
        {
          keyword: $("#keyword").val()
        },
        function(data,status){
          //alert("Data: " + data + "\nStatus: " + status);
          var html = ""; //테이블에 검색어내용 넣기
          $.each(data, function(i, field){
            //$("div").append(field + " ");
            //console.log(field["keyword"]);
            html += "<tr><td>"+ field["keyword"]+"</td><td>"+field["cnt"]+"</td></tr>";
           });
          $("tbody").html(html); // json포맷 출력하기
        });
			});		
  	});
	</script>
</html>
