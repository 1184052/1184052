<html>
<head>
	
<title></title>

</head>
<body>

<h1>Creat an account</h1>


<form action="https://www.ecwm604.us:443/w1184052/index.php/auth/createaccount" method="POST">
enter your name:
<input type="text" name='name'><br>
choose your username:
<input type="text" name='uname'>  <br>
choose password:
<input type="password" name='pword'> <br>
confirm password:
<input type="password" name='conf_pword'>
<input type="submit" value='Register'>
</form>
<?php echo $errmsg;
?>
<br />
<h2><?php
echo $succ;
?></h2>

</body>
</html>