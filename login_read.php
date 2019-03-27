<?php

    include "db.php";

  $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query FAILED". mysqli_error());
    }

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

<?php  
        while($row = mysqli_fetch_assoc($result)) { ?>
            <pre>
                <?php print_r ($row); ?>
            </pre>

     <?php   } ?>


?>
        </div>
    </div>
</body>
</html>