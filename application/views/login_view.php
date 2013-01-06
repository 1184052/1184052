<html>
<head>
	
<title></title>

</head>
<body>

<h1>Login page</h1>


<form action="https://www.ecwm604.us:443/w1184052/index.php/auth/authenticate" method="POST">
username:
<input type="text" name='uname'>  <br>
password:
<input type="password" name='pword'> <br>
<input type="submit" value='Login'>
</form>
<a href="register">Register!</a>
<?php echo $errmsg;
?>
<br />
<h2><?php
echo $succ;
?></h2>

</body>
</html>