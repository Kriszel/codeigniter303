<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<script>
			const url = 'https://codeigniter303.herokuapp.com/index.php/newsapi';
			fetch(url)
			.thenn(data =>data.json())
			.then((json) =>
			{
				alert(JSON.stringigy(json));
			})
		</script>
	</body>

</html>