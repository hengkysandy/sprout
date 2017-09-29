<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="filename">
	<input type="submit" value="ins">
</form>
</body>
</html>