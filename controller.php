<?php
    $mode = $_REQUEST['mode'];
    
    if($mode=='main'){
        header("location: /main.php"); 
    }
    else if($mode=='hello'){
        header("location: /hello.php"); 
    }
    else if($mode=='search'){
        header("location: /search.php"); 
    }
    else if($mode=='slist'){
        header("location: /slist.php"); 
    }
    else if($mode=='login'){
        header("location: /login.php"); 
    }
    else if($mode=='logout'){
        header("location: /logout.php"); 
    }
    else{
        header("location: /404.php");
    }
?>