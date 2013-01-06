<html>
<head>
	
<title></title>

</head>
<body>

<h1>Update employee salary</h1>


<form action="http://www.ecwm604.us/w1184052/index.php/update_salary/updslry" method="POST">
employee id: 
<input type=text name="id"><br />
change salary to: 
<input type=text name="salary"><br />
from date: 
<input type=text name="from_date"><br />
to date: 
<input type=text name="to_date"><br />
<input type="submit" value="submit"/>
<br />
<h2><?php
echo $succ;
?></h2>

</body>
</html>