<?php
    require 'db.php';
    session_start();
    $id = "admin";
    $pw = "1234";
    $name = "관리자";
    //이름
    //전화번호

    $userid = $_POST["userid"];
    $userpw = $_POST["userpw"];
    $username = $_POST["username"];
    echo $userid."<br>";
    echo $userpw."<br>";
    if($id == $userid && $pw ==$userpw){
        echo "로그인 성공";
        $_SESSION['userid'] = $id; // 세션에 $id 값을 저장하는 것.
        $_SESSION['username'] = $name;
        header("location: /"); 

    } else{
        echo "로그인 실패";
        header("location: /login.php"); 
    }
?>