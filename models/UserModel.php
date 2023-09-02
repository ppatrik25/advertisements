<?php

class UserModel {
    public static function getAllUsers() {
        require_once "../config.php";
        //Checking connection
        if (!$conn) {
            echo("Connection failed: " . mysqli_connect_error());
        }
        //Database interaction, user list formatting
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
          if ($result = $conn->query($query)) {
        
            while($row = mysqli_fetch_assoc($result)){

              echo "<li>" . $row["name"]. "</li><br>";
              
            }
           }
           else
           {
             echo "0 results";
           }    
    }
}
