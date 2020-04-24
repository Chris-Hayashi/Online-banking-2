<html>
  <head>
    <title>processing file</title>
  </head>
  <body>
    <h1>processing</h1>
    <?php


    if (isset($_POST["userName"]) && isset($_POST["password"])){
      if($_POST["userName"] && $_POST["password"]){
          $username = $_POST["userName"];
          $password = $_POST["password"];
          $email = $_POST["email"];
          $name = $_POST["name"];
          $address = $_POST["address"];
          $accountNumber = $_POST["accountNumber"];
          $pin = $_POST["pin"];
          $balance = $_POST["balance"];


        $conn = mysqli_connect("localhost", "root", "", "users");

        if (!$conn){
          die("connection failed: ".mysqli_connect_error());
        }
          $sql = "INSERT INTO student(username, password, email, name, address, accountNumber, pin, balance) VALUES
          ('$username', '$password', '$email', '$name', '$address', '$accountNumber', '$pin', '$balance')";

          $results = mysqli_query($conn, $sql);

          if ($results){
            echo "user has been added";
          }
          else{
            echo mysqli_error($conn);
          }

          mysqli_close($conn);
        }
      else{
        echo "not submitted";
      }
    }
    else{
      echo "form was not submitted.";
    }
    ?>

  </body>
  </html>
