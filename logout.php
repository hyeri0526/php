<?php
session_start();
session_destroy();
?>
<script>
    alert("로그아웃 되었습니다.");
    location.replace('/'); // root 디렉토리
</script>