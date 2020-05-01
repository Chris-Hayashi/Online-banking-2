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

                <!-- Account Options -->
                <div class="row" id="accountOptions">
                    <div class="col-md-4">
                        <button type="button" data-toggle="modal" data-target="depositModal">Deposit</button>
                    </div>
                    <div class="col-md-4">
                    <a href="withdrawal.php"> <button>Withdraw</button> </a>
                    </div>
                    <div class="col-md-4">
                    <a href="transfer.php"> <button>Transfer</button> </a>
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
        <div class="modal-dialog" role="document">
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
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
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