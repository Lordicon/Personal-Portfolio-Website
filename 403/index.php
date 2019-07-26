<html>
<head>
<title>Protected Site</title>
<style>                
body
{
	margin:0px;
}
#custom_messaging_banner
{
	background: #eb583c;
	padding: 7px 10px;
	color: white;
	border-bottom: solid 3px white;
	font-size:16px;
	position:relative;
	z-index:1;
}
</style>
<style>
html, body 
{
	text-align: center;
	height: 100%;
}
body 
{ 
	background: url(https://joshuanightingale.com/403/bg_dot.png) #d6d9e2; 
	font-family:Arial;
}
#form_wrap 
{ 
	background: url(https://joshuanightingale.com/403/login_bg.png) no-repeat;
	display: block;
	margin: 0px auto;
	height: 450px;
	width: 403px; 
	position: relative;
	top: 50%;
	margin-top: -225px; 
}
#form_wrap input[type=text], .enter_password 
{
	background: url(https://joshuanightingale.com/403/input_back.png) no-repeat; 
	position: absolute;
	top: 159px;
	left: 50px;
	border: 0px;
	width: 313px;
	padding-left: 50px;
	font-size: 15px;
	line-height: 15px;
	padding-top: 9px;
	height:62px;
	color:rgb(85, 86, 90);
	opacity:.8;
}
#form_wrap input:active, #form_wrap input:focus 
{
	outline:0;
	opacity:1;
}
#form_wrap button 
{
	background: url(https://joshuanightingale.com/403/login_button.png) no-repeat top; 
	width: 316px;
	border: 0px;
	height: 85px;
	position: absolute;
	top: 257px;
	left: 43px;
	cursor:pointer; opacity:.7;
}
#form_wrap button:hover 
{
	opacity:.8;
}
#form_wrap button:focus, #form_wrap button:active 
{ 
	opacity:1;
}
#changed_wrap 
{
	position: absolute;
	top: 225px;
	color: white;
	left: 63px;
	width: 291px;
	text-shadow: 1px 1px 1px black;
	font-weight: normal;
	font-family: Arial;
	text-align: left;
	font-size: 14px;
	overflow: hidden;
	max-height: 33px;
}
#changed_wrap div 
{
	display:inline-block;
	vertical-align: top;
}
#changed_title 
{
	padding-right:5px;
}
#last_date
{
	width: 183px;
}
</style>
</head>
					
<!--[if IE]>
<style>
#form_wrap input[type=text], .enter_password 
{
	line-height:50px;    /* adjust value */
}
</style>
<![endif]-->
<body>
	<div id="form_wrap">
		<form method="post">
			<input type="password" name="hwsp_motech" placeholder="Password" class="enter_password">
			<div id="changed_wrap">
            	<div id="changed_title">Last changed:</div>
            	<div id="last_date">2018/12/11</div>
            </div>
            <button type="submit"></button>
		</form>
	</div>
</body>
</html>