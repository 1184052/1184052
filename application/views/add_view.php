<html>
<head>
	
<title></title>

</head>
<body>

<h1>Add employees</h1>

<form action="http://www.ecwm604.us/w1184052/index.php/add_employee/addemp" method="POST">
employee number:
<input type="text" name="emp_no" id="emp_no"/><br >
birth date:
<input type="text" name="birth_date" id="birth_date"/><br >
first name:
<input type="text" name="first_name" id="first_name"/><br >
last name:
<input type="text" name="last_name" id="last_name"/><br >
gender:
<input type="text" name="gender" id="gender"/><br >
hire date:
<input type="text" name="hire_date" id="hire_date"/><br >
job title:
<input type="text" name="title" id="title"/><br >
department:
<input type="text" name="dept" id="dept"/><br >
<input type="submit" value="submit"/>
</form>
<?php
echo $msg;
//foreach ($data)
?>

</body>
</html>