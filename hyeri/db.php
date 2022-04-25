<?php
    require './dbconfig.php'; //db 연결정보

    function insert_contact($name,$email,$phone,$message){ //입력 함수
        
        $conn = dbconn(); // dbconfig.php의 함수 호출,db연결
        
        /* INSERT 예제 */
        $sql = "INSERT INTO member (name,email,phone,msg) VALUES ('$name','$email','$phone','$message')";
        $result = mysqli_query($conn, $sql);
        
        //if($result) { echo "insert success!"; }
        //else { echo "failure"; }

        mysqli_close($conn);
    }   
    
    function select_contact(){ //조회함수
        $conn = dbconn(); // dbconfig.php의 함수 호출,db연결
        /* DB 연결 확인 */
        //if($conn){ echo "Connection established"."<br>"; }
        //else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
        
        /* SELECT 예제 */
        $sql = "SELECT * FROM member";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo $row['name']."<br>".$row['email']."<br>".$row['phone']."<br>".$row['message']."<br>";
        }        
        mysqli_close($conn);
    }
?>