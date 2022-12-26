<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  
  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
      <form action="mypage.php" method="post" >
        <div class="error">
          メールアドレスまたはパスワードが間違っています。
        </div>

        <div class="form_contents">
          <div class="mail">
            <label>メールアドレス</label><br>
            <input type="text" class="formbox" size="40" name="mail" >
          </div>

          <div class="password">
            <label>パスワード</label><br>
            <input type="password" class="formbox" size="40" name="password">
          </div>

          <div class="loginiji">
            <div class="boxyou"></div>
            <label><input type="checkbox" class="loginiji" name="login_keep" value="login_keep">ログイン状態を維持する</label>
            </div>
          </div>

          <div class="in">
            <input type="submit" class="in_button" size="20" value="ログイン">
          </div>

        </div>
      </form>

    </main>

    <footer>
      ©2018 InterNous.inc. All rights reserved
    </footer>

  </body>

</html>