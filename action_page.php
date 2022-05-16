
<?php 
    include 'db.php';
    $keyword = $_POST["keyword"];
    insert_keyword($keyword); //db.php의 함수 호출
    
    $dblist = json_keyword(); //배열을 받아옴.
    $jsonlist = json_encode($dblist, JSON_UNESCAPED_UNICODE);//json포맷으로 변경, 한글지원
    echo urldecode($jsonlist); //json포맷을 문자열로 출력
    //header("location: /slist.php"); 
    header('Content-type: application/json'); //json으로 화면에 출력
?>

