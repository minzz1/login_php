<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/common.css">
  <title>회원가입 폼</title>
  <!-- 사용자 정보를 입력 받는닷 -->

</head>
<body>
  <!-- 폼 메소드 post;문서 숨겨서 보냄 ㅎ get;id,pw 노출됨 ㅋ  -->
  <form name="member_form" action="./member_insert.php" method="post">
    <h2>회원가입</h2>
      <ul>
        <li>아이디</li>
        <li><input type="text" name="id"></li>
      </ul>
      <ul>
        <li>비밀번호</li>
        <li><input type="password" name="pass"></li>
      </ul>
      <ul>
        <li>확인짱</li>
        <li><input type="submit" name="제출">ㅇㅇ</li>
      </ul>
      <ul>
        <li>취소짱</li>
        <li><input type="reset" name="초기화">ㅇㅇ</li>
      </ul>

  </form>

</body>
</html>