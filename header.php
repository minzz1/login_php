<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>herder</title>
  <link rel="stylesheet" href="./css/common.css">
</head>
<body>
  <div id="top">
    <h3>
      <a href="index.php">sns연동 회원가입프로젝트</a>
    </h3>
    <ul id="top_menu">
    <?php
    //로그인 상태가 아니라면 회원가입, 로그인 메뉴 출력
      if (!$user_id){
    ?>
      <li><a href="./member_from.php">회원가입</a></li>
      <li> | </li>
      <li><a href="./login_form.php">로그인</a></li>
    <?php 
    //로그인 상태라면 아이디, 레벨, 로그아웃 메뉴 출력
      } else {
        $logged = $user_id."[ Level:".$user_level." ]";
    ?>
      <li><?= $logged ?></li>
      <li> | </li>
      <li><a href="logout.php">로그아웃</a></li>
    <?php
      }
    ?>
    <?php
      if($user_level==1){
    ?>
      <li> | </li>
      <li><a href="admin.php">minzz 관리자 모드</a></li>
    <?php
      }
    ?>

    </ul>
  </div>
  <div id="menu_ber">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="message_form.php">쪽지 만들기(13장)</a></li>
      <li><a href="board_from.php">게시판 만들기(14장)</a></li>
      <li><a href="login_from.php">사이트 완성하기</a></li>
    </ul>
  </div>
</body>
</html>