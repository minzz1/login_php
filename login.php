<?php
  // login_form 에서 POST 방식으로 넘겨받은 값을 각가 변수 앖 을 대입
  // user_id변수 생성하고, POST 방식으로 넘겨받은 폼의 id 값 대입 
  $user_id = $_POST["id"];
  // user_pass변수 생성하고, POST 방식으로 넘겨받은 폼의 id 값 대입 
  $user_pass = $_POST["pass"];

  // mysqli_connect()함수로 데이터 베이스  접속하기
  // mysqli_connect("호스트명", "사용자계정", "비밀번호", "데이터베이스명");

  //데이터베이스 접속정보 작성
  include "database_con.php";
  //$con = mysqli_connect("localhost", "project1_user", "12345", "project1");

  //sql 명령어 작성
  //입력받은 id와 데이터베이스의 id 컬럼의 값이 일치하는 데이터가 있는지 검색
  $sql = "select * from members where id='$user_id'";
  

  //mysqli_query()로 데이터베이스에 접속하여 sql 명령어 전달
  //해당하는 결과값을 result에 저장한다.
  $result = mysqli_query($con, $sql); //$sql에 저장된 명령 실행

  //mysqli_num_rows() 반환되는 행의 갯수를 반환하는 함수
  //mysqli_fetch_array() 반환되는 값을 반환하는 함수 -> key값!
  //해당하는 결과값을 $num_match에 저장한다.
  //만족하는 아이디가 1개 인경우 1을 반환한다. 
  $num_match = mysqli_num_rows($result);

  if(!$num_match){
    echo("
      <script>
        window.alert('등록되지 않은 아이디입니다!')
      // 이전페이지로 돌아간다! 히스토리 고 마이너스 1 낄낄
        history.go(-1)
      </script>
    ");
  }else {
    $row = mysqli_fetch_array($result);
    //db_pass 변수 선언해서 데이터베이스의 pass 컬럼의 값 대입
    $db_pass = $row["pass"];

    if($user_pass != $db_pass){
      echo("
        <script>
          window.alert('비밀번호가 틀립니다!')
          history.go(-1)
        </script>
      ");

  //데이터베이스의 비밀번호와 사용자 입력 비밀번호가 같다면 세션 시작한다.
    }else {
      session_start();
      $_SESSION["userid"] = $row["id"];
      $_SESSION["userlevel"] = $row["level"];
  //로그인 후 index 페이지로 이동한다.
      echo("
        <script>
          location.href = 'index.php';
        </script>
      ");
    };
  }




