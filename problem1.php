<!DOCTYPE html>
<html>
<head>
    <title>Chào các bạn</title>
   
</head>
<body>
<?php
$ten = "";
$xuat_ten = "";
if (isset($_POST["ten"]))
{
$ten=$_POST["ten"];
$xuat_ten="Chào bạn ".$ten;
}
?>
<form action="problem1.php" method="post" >
<table width="271" border="1">
<tr>
<td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
</tr>
<tr>
<td width="91">Họ tên bạn</td>
<td width="164">
<input type="text" name="ten" id="chao3" /></td>
</tr>
<tr>
<td colspan="2">
<label><?php echo $xuat_ten; ?></label></td>
</tr>
<tr>
<td colspan="2" align="center" valign="middle"><input type="submit" name="chao"
id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>