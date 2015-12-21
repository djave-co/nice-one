<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nice One</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:700'>
	<style>

    body{
        font-family:Montserrat;
        text-align:center;
        font-size:1em;
        color:#5ae;
        height:100%;
        overflow:hidden;
    }

        html, body{height:100%;}
        .welcome{position:relative; top:30%; margin: 0 auto;overflow:hidden; max-width:400px;}
        .footer{
            position:fixed;
            bottom:0;
            left:0;
            right:0;
            text-align:center;
            padding:10px 0;
            font-size:12px;

        }
        .footer a{
            text-decoration:none;
            color:#ccc;
        }
	</style>
</head>
<body>
	<div class="welcome">

		{{ Form::open(['class' => 'pure-form']) }}

		    <p>{{ Form::label('phrase') }}
		    {{ Form::text('phrase', '', ['required' => 'required']) }}
            {{ Form::submit('Go!', ['class' => 'pure-button']) }}</p>

		{{ Form::close() }}
	</div>
</body>
</html>
