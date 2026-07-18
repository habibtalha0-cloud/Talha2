<?php
// 

// if(isset($GET["btn"]))

//     {
//         echo $_GET["Username"];
//         echo $_GET["Email"];
//         echo $_GET["Password"];
//         echo $_GET["Age"];
//     }

if(isset($POST["btn"]))

    {
        echo $_POST["Username"];
        echo $_POST["Email"];
        echo $_POST["Password"];
        echo $_POST["Age"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Username</label>
        <input type="text" name="Username"><br><br>
        <label for="">Email</label>
        <input type="Email" name="Email"><br><br>
        <label for="">Password</label>
        <input type="Password" name="Password"><br><br>
        <label for="">Age</label>
        <input type="text" name="Age"><br><br>
        <input type="Submit" value="Submit" name="btn">
    </form>
</body>
</html>