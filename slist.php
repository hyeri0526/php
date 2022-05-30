<!DOCTYPE html>
<html lang="en">
<head>
  <title>검색 리스트 페이지</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
<?php 
  include 'menu.php';
  session_start(); //서버에 클라이언트 정보 저장공간: 세션
  if(!isset($_SESSION['userid'])) {  //세션에 값이 없으면, 즉 로그인이 안되어있으면
      echo "<script>location.replace('login.php');</script>";            
  }

  else {
      $userid = $_SESSION['userid'];
      $username = $_SESSION['username'];
  } 
?>

<div class="container">
  <h4> <? echo $username. "님 반갑습니다." ?></h4>
  <p><center><h4>지금까지 검색 리스트</h4></center></p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>번호</th>
        <th>검색어</th>
        <th>검색횟수</th>
        <th>수정</th>
        <th>삭제</th>
       
      </tr>
    </thead>
    <tbody>
        <?php
            require 'db.php';  //db.php파일 임포트
            $retlist = select_keyword();  //db.php의 함수 호출  
            foreach($retlist as $key => $value) {
                $sp = explode("/", $value);  //구분자로 문자열 자르기            
                echo "<tr>
                        <td>".$sp[0]."</td>
                        <td>".$sp[1]."</td>
                        <td>".$sp[2]."</td>
                     ";
                echo "<td><button type='button' class='btn btn-warning' onclick='showmodal($sp[0],\"$sp[1]\")'>수정</button></td>";
                echo "<td><button type='button' class='btn btn-danger' onclick='del($sp[0])'>삭제</button></td>";
                echo "</tr>";
            }
        ?>      
    </tbody>
  </table>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">수정</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"> 
        	<label for="seq">번호:</label>
            <input type="text" class="form-control" id="seq" name="seq" readonly>
            <label for="kw">키워드:</label>
            <input type="text" class="form-control" id="kw" name="kw">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" onclick='modi()'>수정</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">취소</button>
        </div>
        
      </div>
    </div>
  </div>

<script>
  $(document).ready(function(){    
  });
  //모달 띄우기
  function showmodal(seq, keyword){
  // alert(seq + " " + keyword);
  $("#seq").val(seq);
  $("#kw").val(keyword);
  $('#myModal').modal('show');
}

//수정 함수
function modi(){
  var ret = confirm("수정 할래?");
  if (ret != true) {    
    return;
  }
  // 모달창 텍스트 박스 값 읽기
  var seq = $("#seq").val();
  var keyword = $("#kw").val();
  
  // 데이터 보내기
  $.post("modikeyword.php",
  {
    seq: seq,  // 키:함수의 매개변수
    keyword: keyword  // 키:함수의 매개변수
  },
  function(data, status){
    if (data == 1) {
      alert("수정 되었습니다.");
    } else {
      alert("수정 실패!!\n관리자에게 문의");
    }
    location.reload();
    // $("div").html(data);
  });
}

//삭제 함수
 function del(seq){  
    var ret = confirm("삭제하시겠습니까?");
    if (ret != true){ // 취소할때
      reurn;
    }

    $.post("delkeyword.php",
    {
      seq: seq // 키:함수의 매개변수
    },
    function(data,status){ // 콜백값      
      if(data == 1){
        alert("삭제되었습니다.");
        location.reload(); // 삭제후 새로고침.
      }
      else{
        alert("삭제 실패!관리자에게 문의");
      }
      
      //$("div").html(data);
    });
 };
</script>
</body>
</html>

    
