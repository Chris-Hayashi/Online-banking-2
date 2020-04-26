
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
            <li><a href="deposit.php">deposit</a></li>
            <li><a href="transfer.html">transfer</a></li>
            <li><a href="atm.html">atm</a></li>
            </ul>
        </div>
      </nav>
    </header>

  <main>
    <div class = "wrapper">
      <div class="accountPanel">
        <table>
          <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>name</th>
            <th>Address</th>
            <th>Account Number</th>
            <th>Pin Number</th>
            <th>Balance</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "users");
          if ($conn -> connect_error) {
            die("connection failed:". $conn-> connect_error);
          }

          $sql = "select username, email, name, address, accountNumber, pin, balance from student";
          $result = $conn-> query($sql);

          if ($result-> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
              echo "<tr><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["name"] ."</td><td>". $row["address"] ."</td><td>". $row["accountNumber"] ."</td><td>". $row["pin"] ."</td><td>". $row["balance"] ."</td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "0 result";
          }

          $conn-> close();
           ?>
        </table>

      </div>
    </div>
  </main>

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
