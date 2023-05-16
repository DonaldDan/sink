<?php
require 'conn.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $sql = "Insert into dan1 (username, password) values ('".$_POST['username']."', '".$_POST['password']."')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "User added";
    }else{
        echo "Not added";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Figma</title>
</head>
<body class="body">
    <div class="container">
        <form action="" method="post">
            <label class="lable">Username</label>
            <input type="text" name="username" id="usename" required>
            <br><br>
            <label class="lable">Password</label>
            <input type="password" name="password" id="password" required>
            <br><br>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div> 
</body>
</html>