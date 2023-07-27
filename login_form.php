<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/common.css">
  <title>로그인 폼</title>
</head>
<body>
<form name="login_form" action="./login.php" method="post">
    <h2>로그인</h2>
      <ul>
        <li>아이디</li>
        <li><input type="text" name="id"></li>
      </ul>
      <ul>
        <li>비밀번호</li>
        <li><input type="password" name="pass"></li>
      </ul>
      <ul>
        <li><input type="submit" /></li>
        <li><input type="reset" /></li>
      </ul>
  </form>
</body>
</html>