<?php
  // login_form 에서 POST 방식으로 넘겨받은 값을 각가 변수 앖 을 대입
  // user_id변수 생성하고, POST 방식으로 넘겨받은 폼의 id 값 대입 
  $user_id = $_POST["id"];
    // user_pass변수 생성하고, POST 방식으로 넘겨받은 폼의 id 값 대입 
  $user_pass = $_POST["pass"];

  // mysqli_connect()함수로 데이터 베이스  접속하기
  // mysqli_connect("호스트명", "사용자계정", "비밀번호", "데이터베이스명");

  //데이터베이스 접속정보 작성
  $con = mysqli_connect("localhost", "project1_user", "12345", "project1");

  //sql 명령어 작성
  //입력받은 id와 데이터베이스의 id 컬럼의 값이 일치하는 데이터가 있는지 검색
  $sql = "select * from members where id='$user_id'";
  

  //mysqli_query()로 데이터베이스에 접속하여 sql 명령어 전달
  //해당하는 결과값을 result에 저장한다.
  $result = mysqli_query($con, $sql); //$sql에 저장된 명령 실행

  //mysqli_num_rows() 반환되는 행의 갯수를 반환하는 함수
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
    echo ("
      <script>
      window.alert('등록된 아이디입니다! ')
      history.go(-1)
      </script>
    ");
  }





  // 데이터베이스 접속 종료
  mysqli_close($con);
  //데이터베이스 종료 후 index.php 열기
  echo "
    <script>
      location.href = 'index.php';
    </>
  ";
?>