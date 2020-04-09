<?php 

//includes file witl the connections for the dataBase
include "db.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="col-sm-6">

            <form action="login.php" method="post">
                <div class="form-group">
                    <lable for="username">username</lable>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="password">password</lable>
                    <input type="password" name="password" class="form-control">
                </div>

                <input type="submit" name="submit" value="Login" class="btn btn-primary">
            </form>

        </div>

    </div>
</body>
</html>