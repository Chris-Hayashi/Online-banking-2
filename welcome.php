<?php include('accountProcess.php');
?>

<html lang="en" dir="ltr">

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="welcome.php">
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

<body id="welcomePage">
  <div>
    <div class="container">
      <div class="card" id="welcomeCard">
        <div class="row">
          <h1>Welcome back, <span style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_name; ?></i></span>,</h1>
        </div>

        <br>

        <div class="row">
          <p>Account Number: <span
              style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_accountNumber; ?></i></span>
          </p>
        </div>

        <hr>

        <!-- Account Overview -->
        <div class="row">
          <h3>Balance: $<span style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_balance; ?></i></span>
          </h3>
        </div>
        <br>

        <hr>

        <!-- Account Options -->
        <div class="row" id="accountOptions">
          <div class="col-md-4">
            <button type="button" data-toggle="modal" data-target="#depositModal">Deposit</button>
          </div>
          <div class="col-md-4">
            <!-- <a href="withdrawal.php">  -->
              <button type="button" data-toggle="modal" data-target="#withdrawModal">Withdraw</button>
             <!-- </a> -->
          </div>
          <div class="col-md-4">
            <!-- <a href="transfer.php">  -->
              <button type="button" data-toggle="modal" data-target="#transferModal">Transfer</button> 
            <!-- </a> -->
          </div>
        </div>

        <br><br>

        <!-- Close Account -->
        <div class="row" id="closeAccountRow">
          <div class="col-md-12">
            <a href="closeaccount.php">
              <button id="closeAccountBtn">Close Account <img src="./images/closeImage.png" id="closeImg"></button> </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Deposit Modal -->
  <div class="modal" id="depositModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Make a Deposit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="deposit.php" method="post" enctype="multipart/form-data">
            <p>Account Number</p>
            <input type="text" name="accountNumber" placeholder="Enter Account Number" value="">
            <p>Pin Number</p>
            <input type="text" name="pin" placeholder="Enter Pin Number" value="">
            <p>Deposit Amount</p>
            <input type="text" name="depositAmount" placeholder="Enter Deposit Amount" value="">
            <input type="submit" name="submit" value="Submit">
            <p>Electronic Check Deposit</p>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Deposit" name="upload">
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Withdraw Modal -->
  <div class="modal" id="withdrawModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="withdrawal.php" method="post">
            <p>Account Number</p>
            <input type="text" name="accountNumber" placeholder="Enter Your Account Number" value="">
            <p>Pin Number</p>
            <input type="text" name="pin" placeholder="Enter Pin Number" value="">
            <p>Withdrawal Amount</p>
            <input type="text" name="withdrawAmount" placeholder="Enter Withdrawal Amount" value="">
            <input type="submit" name="submit" value="Submit">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Transfer Modal -->
  <div class="modal" id="transferModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Transfer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="transfer.php" method="post">
            <p>Account Number</p>
            <input type="text" name="accountNumber" placeholder="Enter Your Account Number" value="">
            <p>Pin Number</p>
            <input type="text" name="pin" placeholder="Enter Pin Number" value="">
            <p>Destination Account Number</p>
            <input type="text" name="destinationAccNum" placeholder="Enter Account Number You Wish to Transfer Funds"
              value="">
            <p>Transfer Amount</p>
            <input type="text" name="transferAmount" placeholder="Enter Transfer Amount" value="">
            <input type="submit" name="submit" value="Submit">
          </form>
          <!-- </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
</body>

</html>