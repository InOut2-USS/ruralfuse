<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<form action="{{ url('test') }}" method="post">
			<select name="skills" multiple>
				<option value="one">One</option>
				<option value="two">Two</option>
				<option value="three">Three</option>
				<option value="four">Four</option>
				<option value="five">Five</option>
			</select>
		</form>
	</body>
</html>