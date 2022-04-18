
<?php 
include 'db.php';
$keyword = $_POST["keyword"];
insert_keyword($keyword);
echo $keyword; 

?>


