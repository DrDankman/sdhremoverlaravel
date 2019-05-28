<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<link href="https://fonts.googleapis.com/css?family=Lekton:700" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<title>SDH Remover</title>
</head>
<body>
	<div class="loggadiv">
		<a href="/">
			<img src="/media/loggavit.svg" height="30%" width="30%">
		</a>
	</div>
	<div class="searchdiv">
		<input id="search" type="text" name="FirstName" placeholder="Search for subtitles..." onkeyup="entersearch()">
	</div>
	@yield('content')

	<script src="/js/script.js"></script>
</body>
</html>