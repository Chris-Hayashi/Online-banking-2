
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
    <nav>
      <div class="img-future">
        <div class="header-brand">
          <h1>Bank Of Future</h1>
        </div>
          <ul>
            <li><a href="login.php">home</a></li>
            </ul>
        </div>
      </nav>
    </header>

    <transfer>
      <div class = "transfer-body">
        <div class="transfer-box">
          <h1>Transfer Funds</h1>
          <form class="" action="transfer.php" method="post">
                <p>Account Number</p>
                <input type="text" name="accountNumber" placeholder="Enter Your Account Number" value="">
                <p>Pin Number</p>
                <input type="text" name="pin" placeholder="Enter Pin Number" value="">
                <p>Destination Account Number</p>
                <input type="text" name="destinationAccNum" placeholder="Enter Account Number You Wish to Transfer Funds" value="">
                <p>Transfer Amount</p>
                <input type="text" name="transferAmount" placeholder="Enter Transfer Amount" value="">
                <input type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>
</transfer>

  <footer>
    <ul class="footer-main">
      <li>Location</li>
      <li>Contact Us</li>
      <li>Privacy & Security</li>
      <li>Sitemap</li>
      <li>feedback</li>
    </ul>
    <ul class="footer-submain">
      <li><b></b>Bank of Future</li>
      <li><b></b>Best Banking in the United State</li>
      <li><b></b>Location in CMPE 131 Class</li>
      <li><b></b>Built by group #2</li>
      <li><b></b>2020, All Rights Reserved</li>
    </ul>
      <div class="footer-sm">
        <c href="#"><img src = "facebook.png" alt = "favebook icon"></c>
        <c href="#"><img src = "youtube.png" alt = "youtube icon"></c>
        <c href="#"><img src = "twitter.png" alt = "twitter icon"></c>
      </div>
  </footer>
  </body>
</html>
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


      if($row['accountNumber'] == $accountNumber && $row['pin'] == $pin){
        $balance = $row['balance'];
        $updatedBalance = $balance - $transferAmount;
        $sql = "UPDATE student SET balance='$updatedBalance' where accountNumber = '$accountNumber'";
        
            if(mysqli_query($conn, $sql)){
                $conn2 = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn2, "users");
                if (!$conn2){
                        die("connection failed: ".mysqli_connect_error());
                    }

                // Destination Account
                    $sql = "SELECT balance from student where accountNumber = '$destinationAccNum'";
                    $result = mysqli_query($conn2, $sql);
                    $row = mysqli_fetch_array($result);
                    $destinationBalance = $row['balance'];
                    $updatedDestinationBalance = $destinationBalance + $transferAmount;
                    $sql = "UPDATE student SET balance='$updatedDestinationBalance' where accountNumber = '$destinationAccNum'";
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
