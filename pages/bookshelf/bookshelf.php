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