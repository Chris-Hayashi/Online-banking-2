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
                <h1>Welcome  <span style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_name; ?></i></span>,</h1>
                </div>

                <br>

                <div class="row">
                <p>Account Number: <span style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_accountNumber; ?></i></span></p>
                </div>

                <hr>

                <!-- Account Overview -->
                <div class="row">
                <h3>Balance: $<span style="color:darkolivegreen;font-weight:bold"><i><?php echo $login_balance; ?></i></span></h3>
                </div>
                <br>

                <hr>

                <div class="row" id="accountOptions">
                    <div class="col-md-4">
                    <a href="deposit.php"> <button>Deposit</button> </a>
                    </div>
                    <div class="col-md-4">
                    <a href="withdrawal.php"> <button>Withdraw</button> </a>
                    </div>
                    <div class="col-md-4">
                    <a href="transfer.php"> <button>Transfer</button> </a>
                    </div>
                </div>

                <br><br>
                
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
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Withdraw Modal -->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <!-- Transfer Modal -->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</body>

</html>