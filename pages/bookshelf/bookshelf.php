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
			<a href="../../index.html" class="header-logo"><img src="../../others/images/BOOKTOWER1.png" alt="logo" class="logo"></a>
			<form class="search">
				<!--検索対象ラジオボタン-->
				<input type="radio" id="bookshelf" name="book_or_shelf_radio" value="bookshelf">
				<label class="ra1_img ra_img" for="bookshelf">
			  		<img src="../../others/images/bookshelf/bookshelf_button.png">
				</label>
				
				<input type="radio" id="book" name="book_or_shelf_radio" value="book" checked>
				<label class="ra2_img ra_img" for="book">
			  		<img src="../../others/images/bookshelf/book_button.png">
				</label>
				<!--入力欄-->
				<label>
        		<input type="text" placeholder="キーワードを入力">
    			</label>
    			<button type="submit" aria-label="検索" class="search_button"></button>
			</form>
		</header>

		<!--新規の本を登録するボタン-->
		<a class="new" href="../new/new.php"><div class="new__arrow"></div></a>

		<div class="tab">

		  </div>

		<footer>
			<div class="footer">
				<p><small>Copyright &copy; 2023-2024 Povo Takoyaki All Rights Reserved.</small></p>
				<a href="pages/privacy.html" class="footer-a">プライバシーポリシー</a>
			</div>
		</footer>
	</body>
</html>