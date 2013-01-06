<html>
<head>
	
<title></title>

</head>
<body>

<h1>Update employee title</h1>


<form action="http://www.ecwm604.us/w1184052/index.php/update_title/updtitle" method="POST">
employee id: 
<input type=text name="id"><br />
change title to: 
<select name="title">
<option value="Assistant Engineer">Assistant Engineer</option>
<option value="Engineer">Engineer</option>
<option value="Senior Engineer">Senior Engineer</option>
<option value="Senior Staff">Senior Staff</option>
<option value="Staff">Staff</option> 
</select><br />
<input type="submit" value="submit"/>
<br />
<h2><?php
echo $succ;
?></h2>

</body>
</html>