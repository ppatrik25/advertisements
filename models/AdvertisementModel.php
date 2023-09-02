<?php

class AdvertisementModel {
    public static function getAllAdvertisements() {
        require_once "../config.php";
        //Checking connection
        if (!$conn) {
            echo("Connection failed: " . mysqli_connect_error());
        }
        //Database interaction, advertisement list formatting
        $query = "SELECT a.*, u.name as username FROM advertisements a 
                  LEFT JOIN users u ON a.userid = u.id";
                  $result = mysqli_query($conn, $query);
          if ($result = $conn->query($query)) {

            while($row = mysqli_fetch_assoc($result)){

              echo "<li>" .$row["title"]. "<br> by " . $row["username"] . "</li><br>";

            }
           }
           else
           {
             echo "0 results";
           }
        }
}
