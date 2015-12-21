<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

        html{height:100%;}
        form{position:relative; top:30%; margin: 0;overflow:hidden;}

	</style>
</head>
<body>
	<ul>
        @foreach($phrases as $phrase)
            <li>{{ link_to('#', $phrase->phrase) }}</li>
        @endforeach
	</ul>
</body>
</html>
