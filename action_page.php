당신이 입력한 검색어:
<?php 
$keyword = $_POST["keyword"];
echo $_POST["keyword"]."<br>"; ?>
<?php
    $host = "localhost";
    $user = "hyeri";
    $pw = "acfh1357*";
    $dbName = "hyeri";

    $conn = new mysqli($host, $user, $pw, $dbName);
    
    /* DB 연결 확인 */
    if($conn){ echo "연결성공"."<br>"; }
    else{ die( '연결 실패: ' . mysqli_error($conn) ); }
    
    /* INSERT 예제 */
    $sql = "INSERT INTO `keyword` (`keyword`) VALUES ('$keyword') ON DUPLICATE KEY UPDATE cnt = cnt + 1";
    $result = mysqli_query($conn, $sql);
    
    if($result) { echo "insert success!"; }
    else { echo "failure"; }

    mysqli_close($conn);

?>

