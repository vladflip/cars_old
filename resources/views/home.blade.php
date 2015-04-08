<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<select name="" id="specs">

		<option value="default">выберите спецификацию</option>
		
		@foreach( $specs as $spec)

			<option value="{{ $spec->name }}">{{ $spec->name }}</option>

		@endforeach

	</select>

	<select name="" id="makes"></select>

	<select name="" id="models"></select>

	<script src="js/script.js"></script>
</body>
</html>