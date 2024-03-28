<!DOCTYPE HTML>
<html lang="ja-jp">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
		<link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
		<title>BookTower-本棚</title>
		<script src="https://code.jquery.com/jquery.min.js"></script>
		<script src="bookshelf.js"></script>
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
        		<input type="text" placeholder="キーワードを入力" required>
    			</label>
    			<button type="submit" aria-label="検索" class="search_button"></button>
			</form>
			<button class="mypage"></button>
			<div class="mypage_manu cannotsee">
				<ul>
					<li><a href="#">ログアウト</a></li>
					<li><a href="../setting/index.php">設定</a></li>
					<li class="manu_pr"><a href="#">プライバシーポリシー</a></li>
				</ul>
			</div>
		</header>

		<!--新規の本を登録するボタン-->
		<a class="new" href="../new/new.php"><div class="new__arrow"></div></a>
		
		<div class="bookshelfs">
			<!--左側のメニュー-->
			<div class="bookshelf_manu">
				<ul class="tab">
					<li><a href="#mybookshelf"><span class="material-symbols-outlined">menu_book</span></li></a>
					<li><a href="#friendsbookshelf"><span class="material-symbols-outlined">library_books</span></li></a>
				</ul>
			</div>
			<!--自分の本棚-->
			<div class="mybookshelf" id="mybookshelf">
				<h2>私の本</h2>
				<ul>
					<li>
					<a href="#">
						<img src="../../others/images/topic/dami.jpeg">
						<div>
							<h3>題名(^m^)</h3>
								<p>あらすじとか感想とかその他もろもろ</p>

						</div>
						</a>
					</li>

				</ul>
			</div>
			<!--フォロー中の本棚-->
			<div class="frendsbookshelf" id="friendsbookshelf">

			</div>
		</div>

		<footer>
			<div class="footer">
				<p><small>Copyright &copy; 2023 Povo tako All Rights Reserved.</small></p>
			</div>
		</footer>
	</body>
</html>