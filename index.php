<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $a=$_POST['username'];
    $b=$_POST['passwd'];
    if($a=='Admin'){
        if($b=='Admin'){
            header('location:details.html');
                        }
        else{
            echo "Invalid Details";
            include "index.html";
        }
    }
    else{
        echo "Invalid Details";
        include "index.html";
    }














?>
</body>
</html>