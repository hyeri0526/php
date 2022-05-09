<?php
    require 'dbconfig.php'; //db 연결정보
    //$keyword = $_GET["keyword"]; //테스트용

    function insert_keyword($keyword){ //입력 함수
        
        $conn = dbconn(); // dbconfig.php의 함수 호출,db연결

        /* DB 연결 확인 */
        //if($conn){ echo "연결성공"."<br>"; }
        //else{ die( '연결 실패: ' . mysqli_error($conn) ); }
        
        /* INSERT 예제 */
        $sql = "INSERT INTO `keyword` (`keyword`) VALUES ('$keyword') ON DUPLICATE KEY UPDATE cnt = cnt + 1";
        $result = mysqli_query($conn, $sql);
        
        //if($result) { echo "insert success!"; }
        //else { echo "failure"; }

        mysqli_close($conn);
    }   
    
    function select_keyword(){ //조회함수
        $retlist = array();//db에 리스트를 전달
        $conn = dbconn(); // dbconfig.php의 함수 호출,db연결
        /* DB 연결 확인 */
        //if($conn){ echo "Connection established"."<br>"; }
        //else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
        
        /* SELECT 예제 */
        $sql = "SELECT * FROM keyword";
        $result = mysqli_query($conn, $sql);        
        while($row = mysqli_fetch_array($result)){
            array_push($retlist, $row['keyword']."/".$row['cnt']); //키워드와 카운트값을 리스트에 넣기
        }        
        mysqli_close($conn);
        return $retlist;
    }
?>