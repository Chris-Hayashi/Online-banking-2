
         <!-- <!DOCTYPE html> -->
<html lang="en" dir="ltr">

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script crossorigin defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
        integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="/reset.css" /> -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="account.php">
      <img class="navbar-brand" id="homeLink" src="./images/heroLogo1.png">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div class="nav-item">
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="text-align: center;">
        <div class="container">
          <!-- Login Form -->
            <div class="card p-3" id="loginContainer">
                <div class="card-body">
                    <h5 class="card-title">Transfer Funds</h5>
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
        </div>
    </div>

    <!-- Grid (bottom) -->
    <div id="grid"  style="text-align: center;">
        <div class="container">
            <div class="row">
            <div class="col-md-4" id="firstCol">
                <a href="withdrawal.php">
                <img src="images/withdraw.png" class="icon" />
                </a>
                    <p class="iconText">Withdraw Cash</p>
                </div>
                <div class="col-md-4 ">
                <a href="deposit.php">
                <img src="images/deposit.png" class="icon" />
                </a>
                    <p class="iconText">Deposit Checks</p>
                </div>
                <div class="col-md-4" id="lastCol">
                <a href="transfer.php">
                <img src="images/transfer.png" class="icon" />
                </a>
                    <p class="iconText ">Transfer money</p>
                </div>


            </div>
        </div>
    </div>

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
