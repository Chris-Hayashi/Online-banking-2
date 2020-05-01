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
                    <h5 class="card-title">Make a Deposit</h5>
          <form class="" action="deposit.php" method="post">
          <p>Account Number</p>
                <input type="text" name="accountNumber" placeholder="Enter Account Number" value="">
                <p>Pin Number</p>
                <input type="text" name="pin" placeholder="Enter Pin Number" value="">
                <p>Deposit Amount</p>
                <input type="text" name="depositAmount" placeholder="Enter Deposit Amount" value="">
                <input type="submit" name="submit" value="Submit">
                <input type="button" onclick="location.href='register.php';" value="Make Electronic Check Deposit" />
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
      $pin = $_POST["pin"];
      $depositAmount = $_POST["depositAmount"];

      $sql = "SELECT * from student where accountNumber = '$accountNumber' and pin = '$pin'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);


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
