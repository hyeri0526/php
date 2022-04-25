<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact 페이지 결과</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>  
<a class="navbar-brand" href="index.html">Home</a><br>

당신이 입력한 데이터:
<?php 
    include './db.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    insert_contact($name,$email,$phone,$message); //db.php의 함수 호출
    echo $name."<br>"; 
    echo $email."<br>"; 
    echo $phone."<br>"; 
    echo $message."<br>"; 
?>

<?php 
    echo " 지금까지 입력된 데이터:<br>";
    select_contact();  //db.php의 함수 호출
    ?>
</body>
</html>

