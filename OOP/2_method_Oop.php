
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Simple calculaton : </title>
</head>
<center>
<body>
<form action="" method="POST">
	<table>
		<tr>
			<td><label for="firstnumber">First Number : </label></td>
			<td><input type="number" name="firstnumber"/></td>
		</tr>
		<tr>
			<td><label for="secondnumber">Second Number : </label></td>
			<td><input type="number" name="secondnumber"/></td>
		</tr>
		<tr>
			<td> </td>
			<td><input type="submit" name="ok" value=" Sum "/></td>
		</tr>
	</table>
</form>
</body>
</center>
</html>
<?php
	include '2_methodCalculation.php';
	if(isset($_POST['ok'])){
		$a=$_POST['firstnumber'];
		$b=$_POST['secondnumber'];
			if(empty($a) or empty($b)){
				echo "<center><span style='Color : #FF0000'>Field must not be empty</span><br/></center>";
			}else{
				$ob=new summ;
				$ob->sum($a,$b);
			}
	}
?>