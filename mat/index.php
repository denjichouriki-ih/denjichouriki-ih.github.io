<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>艦コード取得</title>
	</head>
	<body>
		<h1>
			艦コード取得
		</h1>
		<p>
			<i>Rikinnbo(元コード)<a href="num-fune.py">PYTHON CODE</a></i>
		</p>
		<hr>
		<form action="num-fune.php" method="get">
			<p>識別番号<input type="text" name ="shikibetsu/"></p>
			<p>所属艦隊番号<input type="text" name ="shozokunum/"></p>
			<p>所属艦隊(海or宇宙)<input type="text" name ="shozoku/"></p>
			<p>艦名<input type="text" name ="namae/"></p>
			<p>艦種<input type="text" name ="kanshu/"></p>
			<input type ="submit" value ="Submit">
		</form>
		<hr>
		<?php include_once('./num-fune.php') ?>
	</body>
</html>

<!--00417 - 50 OF　NAGANNTO BB
識別 - 艦隊　用途 艦名 艦種-->
