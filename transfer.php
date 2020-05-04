<?php

  if (isset($_POST["routingNumber"]) && isset($_POST["pin"])){
    if($_POST["routingNumber"] && $_POST["pin"]){
      $conn = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conn, "users");
      if (!$conn){
              die("connection failed: ".mysqli_connect_error());
            }

      $routingNumber = $_POST["routingNumber"];
      $destinationRoutNum = $_POST["destinationRoutNum"];
      $pin = $_POST["pin"];
      $transferAmount = $_POST["transferAmount"];

      // Original Account
      $sql = "SELECT * from student where routingNumber = '$routingNumber'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      // Destination Account
      $sql2 = "SELECT * from student where routingNumber = '$destinationRoutNum'";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_array($result2);

      if($row['routingNumber'] == $routingNumber && $row['pin'] == $pin){
        // Update Og Account Balance
        $balance = $row['balance'];
        $updatedBalance = $balance - $transferAmount;
        $sql = "UPDATE student SET balance='$updatedBalance' WHERE routingNumber='$routingNumber' and pin = '$pin'";
        // Update Destination Account Balance
        $destinationBalance = $row2['balance'];
        $updatedDestinationBalance = $destinationBalance + $transferAmount;
        $sql2 = "UPDATE student SET balance='$updatedDestinationBalance' WHERE routingNumber='$destinationRoutNum'";
        $result3 = mysqli_query($conn, $sql2);
        
            if(mysqli_query($conn, $sql)){
                echo "Amount successfully trasnferred.";
            } else {
                $message = "Error: Could not trasnfer amount.";
                echo "<script type = 'text/javascript'>alert('$message');</script>";
            }
      } else{
        $message = "Account Number or Pin is incorrect. \\nTry again!";
        echo "<script type = 'text/javascript'>alert('$message');</script>";


      }
    }
  }


 ?>
