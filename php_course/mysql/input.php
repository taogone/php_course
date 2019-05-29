<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>input.html</title>
	</head>
	<body>
		<form action="./process.php?mode=insert" method="POST">
			<p>제목: <input type="text" name="title" /></p>
			<p>
				본문: <textarea name="description" id="" cols="30" rows="1"></textarea>
			</p>
			<p><input type="submit" /></p>
		</form>
	</body>
</html>
