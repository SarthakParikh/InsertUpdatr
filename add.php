<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" enctype='multipart/form-data' action='add.php'>


<input type="text" name='a' placeholder='Laptop Name'><br>
<input type="text" name='b' placeholder='Laptop Ram'><br>
<input type="text" name='c' placeholder='Laptop Processer'>
<br><input type="text" name='d' placeholder='Laptop Price'><br>
<input type="text" name='e' placeholder='Laptop Disk Space'><br>
<input type="file" name='f' placeholder='Laptop Image'><br>
<input type='submit' value='Add Data'><br>
<br>

</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_FILES['f']['tmp_name'];








?>
</body>
</html>