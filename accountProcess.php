<?php
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "users");
  if (!$conn){
          die("connection failed: ".mysqli_connect_error());
        }
  session_start();

  $user_check = $_SESSION['login_user'];
  $sql = "select * from student where username = '$user_check'  ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $login_name = $row['userName'];
  $login_accountNumber = $row['accountNumber'];
  $login_balance = $row['balance'];


  if(!isset($login_name)){
    mysqli_close($conn);
    // header('location: register.html');
  }
 ?>