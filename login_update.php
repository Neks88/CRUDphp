<?php

    include "db.php";

    include "functions.php";



        UpdateTable();


   












?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Update</h1>
<form action="" method="post">
             <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">             
             </div>

             <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">             
             </div>

             <div class="form-group">
                <select name="id" id="">
                     <?php  showAllData(); ?>
                </select>
             </div>

             <input type="submit" class="btn btn-primary" value="Update" name="submit" value="submit">
            </form>


        </div>
    </div>
</body>
</html>