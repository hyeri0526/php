<!DOCTYPE html>
<html lang="en">
<head>
  <title>메인 페이지</title>
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
당신이 입력한 검색어:
<?php 
    include 'db.php';
    $keyword = $_POST["keyword"];
    insert_keyword($keyword); //db.php의 함수 호출
    echo $keyword."<br>"; 
?>

<?php 
    echo " 지금까지 입력된 검색어:<br>";
    select_keyword();  //db.php의 함수 호출
    ?>
</body>
</html>

