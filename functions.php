<?php 
include "db.php";

function createRows() {
    if(isset($_POST['submit'])) {
        global $connection;
            // echo "Yes, we got it !";
            $username = $_POST['username'];
            $password = $_POST['password'];

            // if($username && $password) {
            //     echo $username;
            //     echo $password;
            // }

            

        $query = "INSERT INTO users(username,pass) VALUES ('$username','$password')";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Query FAILED". mysqli_error());
            }else {
                echo "Record Created";
            }
        }

}





function showAllData () {
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die("Query FAILED". mysqli_error());
    }
   while($row = mysqli_fetch_assoc($result)) {
       $id= $row['id'];

       echo "<option value='$id'>$id</option>";
   }
}






function UpdateTable () {
    global $connection;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "pass = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED".mysqli_error($connection));
        }else{
            echo "Record Updated";
        }
    }
}




function deleteRows () {
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED".mysqli_error($connection));
        }else{
            echo "Record Deleted";
        }
    }

}

