<?php

  if (isset($_POST["accountNumber"]) && isset($_POST["pin"])){
    if($_POST["accountNumber"] && $_POST["pin"]){
      $conn = mysqli_connect("localhost", "root", "");
      mysqli_select_db($conn, "users");
      if (!$conn){
              die("connection failed: ".mysqli_connect_error());
            }

      $accountNumber = $_POST["accountNumber"];
      $pin = $_POST["pin"];
      $depositAmount = $_POST["depositAmount"];

      $sql = "SELECT * from student where accountNumber = '$accountNumber' and pin = '$pin'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["upload"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
      }

      if($row['accountNumber'] == $accountNumber && $row['pin'] == $pin){
          // Get account balance, add requested amount, update database
        $balance = $row['balance'];
        $updatedBalance = $balance + $depositAmount;
        $sql = "UPDATE student SET balance='$updatedBalance' WHERE accountNumber='$accountNumber' and pin = '$pin'";

    if(mysqli_query($conn, $sql)){
        echo "Amount successfully deposited.";
    } else {
        $message = "Error: Could not deposit amount.";
        echo "<script type = 'text/javascript'>alert('$message');</script>";
    }
      } else{
        $message = "Account Number or Pin is incorrect. \\nTry again!";
        echo "<script type = 'text/javascript'>alert('$message');</script>";


      }
    }
  }


 ?>