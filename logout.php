<?php 
  session_start();

  //unset()함수를 이용하여 세션 변수 삭제
  unset($_SESSION["userid"]);
  unset($_SESSION["userlevel"]);

  //로그아웃 후 index로 링크
  echo("
    <script>
    location.href = 'index.php';
    </script>
  ")

?>