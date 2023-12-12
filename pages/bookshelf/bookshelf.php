<!DOCTYPE HTML>
<html lang="ja-jp">
	<head>
		<meta charset="utf-8" />
		<link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
		<title>BookTower-本棚</title>
		<link rel="icon" href="../../others/images/favicon.ico"/>
		<link rel="stylesheet" href="../../others/css/style.css">
		<link rel="stylesheet" href="bookshelf.css">
	</head>
	<body>
		<header>
			<div>
				<a href="../../index.html">
				<img src="../../others/images/BOOKTOWER1.png" alt="logo" class="logo"></a>
			</div>
		</header>

		<a class="new" href="../new/new.php"><div class="new__arrow"></div></a>

		<div class="tab">
  
			<!-- 初期状態で表示されるコンテンツに対応するラジオボタンにはchecked="checkedを設定する -->
			<input id="menu1" class="tab-input" name="menu" type="radio" checked="checked">
			<label for="menu1" class="tab-item">本棚</label>
			<div class="tab-content">
				<!--本棚記述-->
				<div id="mybookshelf">
					<?php
						$id = 10;
						$host = 'localhost';
						$user = 'ubuntu';
						$password = '';
						$db = 'bookshelf';
						
						try {
						
							// (1) データベースに接続
							$mysqli = new mysqli( $host, $user, $password, $db);
						
							// (2) データを登録するSQL
							$stmt = $mysqli->prepare('SELECT * FROM users WHERE id = ?');
						
							// (3) 値をセット
							$stmt->bind_param( 'i', $id);
						
							// (4) SQL実行
							$stmt->execute();
						
							// (5) 取得したデータをセットする変数を設定
							$stmt->bind_result( $id, $first_name, $last_name, $email, $tel);
						
							// (6) 結果を取得
							if( $stmt->fetch() ) {
								var_dump( $id, $first_name, $last_name );
							}
						
							// (7) データベースの接続解除
							$mysqli->close();
						
						} catch(Exception $e) {
						
							// (8) エラーメッセージを出力
							echo $e->getMessage();
						}
					?>
				</div>
			</div>
			
			<input id="menu2" class="tab-input" name="menu" type="radio">
			<label for="menu2" class="tab-item">フォロー中</label>
			<div class="tab-content">
				<!--フォロー中記述-->
			</div>
			
			<input id="menu3" class="tab-input" name="menu" type="radio">
			<label for="menu3" class="tab-item">おすすめ</label>
			<div class="tab-content">
				<!--おすすめ記述-->
			</div>
			
		  </div>

		<footer>
			<div class="footer">
				<p><small>Copyright &copy; 2023-2024 Povo Takoyaki All Rights Reserved.</small></p>
				<a href="pages/privacy.html" class="footer-a">プライバシーポリシー</a>
			</div>
		</footer>
	</body>
</html>