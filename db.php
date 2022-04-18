<?php
    require 'dbconfig.php'; //db 연결정보
    //$keyword = $_GET["keyword"]; //테스트용

    function insert_keyword($keyword){
        
        $conn = dbconn(); // db연결

        /* DB 연결 확인 */
        if($conn){ echo "연결성공"."<br>"; }
        else{ die( '연결 실패: ' . mysqli_error($conn) ); }
        
        /* INSERT 예제 */
        $sql = "INSERT INTO `keyword` (`keyword`) VALUES ('$keyword') ON DUPLICATE KEY UPDATE cnt = cnt + 1";
        $result = mysqli_query($conn, $sql);
        
        if($result) { echo "insert success!"; }
        else { echo "failure"; }

        mysqli_close($conn);
    }    
?>