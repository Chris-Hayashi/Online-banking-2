<?php

  if (isset($_POST["accountNumber"]) && isset($_POST["pin"])){
    if($_POST["accountNumber"] && $_POST["pin"]){
      $conn = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conn, "users");
      if (!$conn){
              die("connection failed: ".mysqli_connect_error());
            }

      $accountNumber = $_POST["accountNumber"];
      $destinationAccNum = $_POST["destinationAccNum"];
      $pin = $_POST["pin"];
      $transferAmount = $_POST["transferAmount"];

      // Original Account
      $sql = "SELECT * from student where accountNumber = '$accountNumber'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      // Destination Account
      $sql2 = "SELECT * from student where accountNumber = '$destinationAccNum'";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_array($result2);

      if($row['accountNumber'] == $accountNumber && $row['pin'] == $pin){
        // Update Og Account Balance
        $balance = $row['balance'];
        $updatedBalance = $balance - $transferAmount;
        $sql = "UPDATE student SET balance='$updatedBalance' WHERE accountNumber='$accountNumber' and pin = '$pin'";
        // Update Destination Account Balance
        $destinationBalance = $row2['balance'];
        $updatedDestinationBalance = $destinationBalance + $transferAmount;
        $sql2 = "UPDATE student SET balance='$updatedDestinationBalance' WHERE accountNumber='$destinationAccNum'";
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
