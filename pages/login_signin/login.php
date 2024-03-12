<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>ログイン - BookTower</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="412612120875-nr0bkf2nn3vtsmvb35d3ve97ab4q8e2j.apps.googleusercontent.com">

 <link rel="stylesheet" href="../../others/css/style.css">
 <link rel="stylesheet" href="./login_signin.css">
 </head>
 <body>
    <header>
		<div>
			<a href="../../index.html">
			<img src="../../others/images/BOOKTOWER1.png" alt="logo" class="logo"></a>
		</div>
	</header>


	<div class="forms">
		<div id="login_title">BookTower-ログイン</div>
		<form action="" method="POST">
	   	    <input id="signin-id" name="username" type="text" placeholder="ユーザー名 または メールアドレス">
    	    <input id="signin-pass" name="password" type="text" placeholder="パスワード">
    	    <button class="form-button" name="signin" type="submit">ログインする</button>
    	</form>
	</div>

	<footer>
		<div class="footer">
			<p><small>Copyright &copy; 2024 Povo Tako All Rights Reserved.</small></p>
			<a href="" class="footer-a">プライバシーポリシー</a>
		</div>
 	</footer>
 </body>
</html>