<?php
mb_internal_encoding("utf8");

session_start();

if (empty($_POST['from_mypage'])) {
  header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
  
  <head>
   <meta charset="UTF-8">
   <title>マイページ登録</title> 
   <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
  </head>

  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>

    <main>
      <div class="kaibox">
        <h1>会員情報</h1>
        <div class="hello">
          <?php echo "こんにちは！ ".$_SESSION['name']."さん";?>
        </div>

        <form action="mypage_update.php" method="post" >
          <div class="propic">
            <img src="<?php echo $_SESSION['picture'];?>">
          </div>
          <div class="basic_info">
            <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
            <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
            <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
          </div>
          <div class="comments">
            <textarea rows="3" cols="12" name="comments"><?php echo $_SESSION['comments'] ?></textarea>
          </div>

          
          <input type="hidden" value="<?php echo rand(1,10);?>" name="from_mypage">
            
          <div class="hensyubotton">
            <input type="submit" class="submit_button" size="35" value="この内容に変更する">
          </div>
        </form>

      </div>
    </main>

    <footer>
      ©2018 InterNous.inc. All rights reserved
    </footer>

  </body>

</html>