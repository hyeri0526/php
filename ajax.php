<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("demo_test_post.php",
    {
      keyword: "당신이 입력한 검색어"
    },
    function(data,status){
      //alert("Data: " + data + "\nStatus: " + status);
      $("div").html(data);
    });
  });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>
<div>여기에 전달받은 데이터가 출력</div>
</body>
</html>