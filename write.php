<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="<?php echo assets_url();?>script/jquery-3.6.0.min.js"></script>
<script src="<?php echo assets_url();?>editor/ckeditor4/ckeditor.js"></script>

<title>Hello, world!</title>
</head>
<body>

<form>
	<textarea id="editor1" name="editor1"></textarea>
	<script>CKEDITOR.replace('editor1');</script>
	<button type="submit">저장</button>
</form>


</body>
</html>
