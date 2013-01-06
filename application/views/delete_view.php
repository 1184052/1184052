<html>
<head>
<title></title>
</head>
<body>
<h1>Delete an employee</h1>

<form action="http://ecwm604.us/w1184052/index.php/delete_employee/dltemp" method="POST">
<p>
employee number:
<input type="text" name="emp_no" id="emp_no"/><br>
<input type="submit" value="Delete!">
</form>
<?php
//
foreach ($data as $val) {
echo "Employee ";
echo $val;
 }
echo $msg;

?>

</body>
</html>