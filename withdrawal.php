<?php

  if (isset($_POST["routingNumber"]) && isset($_POST["pin"])){
    if($_POST["routingNumber"] && $_POST["pin"]){
      $conn = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conn, "users");
      if (!$conn){
              die("connection failed: ".mysqli_connect_error());
            }

      $routingNumber = $_POST["routingNumber"];
      $pin = $_POST["pin"];
      $withdrawAmount = $_POST["withdrawAmount"];

      $sql = "SELECT * from student where routingNumber = '$routingNumber' and pin = '$pin'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);


      if($row['routingNumber'] == $routingNumber && $row['pin'] == $pin){
          // Get account balance, subtract requested amount, update database
        $balance = $row['balance'];
        $updatedBalance = $balance - $withdrawAmount;
        $sql = "UPDATE student SET balance='$updatedBalance' WHERE routingNumber='$routingNumber' and pin = '$pin'";
    if(mysqli_query($conn, $sql)){
        echo "Amount successfully withdrawn.";
    } else {
        $message = "Error: Could not withdraw amount.";
        echo "<script type = 'text/javascript'>alert('$message');</script>";
    }
      } else{
        $message = "Account Number or Pin is incorrect. \\nTry again!";
        echo "<script type = 'text/javascript'>alert('$message');</script>";


      }
    }
  }


 ?>