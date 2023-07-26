<?php
  // 변수 선언하기 
  $user_id = $_POST["id"];
  $user_pass = $_POST["pass"];


  // echo $user_id;
  // echo $user_pass;

  // mysqli_connect()함수로 데이터 베이스  접속하기
  // mysqli_connect("호스트명", "사용자계정", "비밀번호", "데이터베이스명");


  $con = mysqli_connect("localhost", "project1_user", "12345", "project1");

  //sql 명령어 작성
  $sql = "insert into members(id, pass, level)";
  $sql .= "values('$user_id', '$user_pass', 9)";

  //mysqli_query()로 데이터베이스에 접속하여 sql 명령어 전달
  mysqli_query($con, $sql); //$sql에 저장된 명령 실행
  // 데이터베이스 접속 종료
  mysqli_close($con);
  //데이터베이스 종료 후 index.php 열기
  echo "
    <script>
      location.href = 'index.php';
    </script>
  ";
?>