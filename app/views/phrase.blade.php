<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ $phrase->phrase }}
        </title>
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:700'>
        <style>
            body{
                font-family:Montserrat;
                text-align:center;
                font-size:3em;
                color:#5ae;
                height:100%;
                overflow:hidden;
            }
            h1{font-size: 2em; margin: 0.67em 0;
                -webkit-animation:
                flash 0.8s;
                animation: flash 0.8s;
                -webkit-animation-iteration-count: infinite;
                animation-iteration-count: infinite;}
            html{height:100%;}
            h1{position:relative; top:30%; margin: 0;overflow:hidden;}
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
            @-webkit-keyframes flash{
                0%{opacity: 0;}
                49%{opacity: 0;}
                50%{opacity: 1;}
                100%{opacity: 1;}
            }
            @keyframes flash{
                0%{opacity: 0;}
                49%{opacity: 0;}
                50%{opacity: 1;}
                100%{opacity: 1;}
            }
            @media screen and (max-width: 680px){
                h1{font-size:25px;}
            }
        </style>
    </head>
    <body>
        <h1>{{ $phrase->phrase }}</h1>
	<div class="footer">
	    {{ link_to('/', 'Make new') }}
	</div>
    </body>
</html>