<?php
      //session_start() 함수로 세션 시작
      //세션을 저장하거나 저장된 세션을 사용할 때는 먼저 세션을 시작해야 함
      session_start();
      //세션 변수 검사
      //isset($_SESSION["userid"])는 세션 변수인 $_SESSION["userid"]에 값이 있는

      if(isset($_SESSION["userid"])){
            $user_id = $_SESSION["userid"];
      }else {
            $user_id = "";
      }
      if(isset($_SESSION["userlevel"])){
            $user_level = $_SESSION["userlevel"];
      }else {
            $user_level = "";
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>  
        <?php include "header.php";?> 			
  </header> 
  <!-- <section>  
        <?php include "main.php";?>  			④
  </section>  
  <footer>  
        <?php include "footer.php";?>  			⑤
  </footer>  -->



</body>
</html>

