<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank | History</title>
  <link rel="icon" href="./img/icon_bank.png">
  <script src="https://kit.fontawesome.com/50b1d2491c.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style1.css">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
  <div class="containe">
    <!----------NAVIGATION BAR---------->
    <div class="navigatio">
        <div class="logo">
             
            Sparks<span class="logo-hlt"></span> Bank
        </div>
        <nav>
            <ul>
                <li>
                  <a href="index.html" class="text-decoration-none">Home</a>
                </li>
                <li>
                  <a href="#" class="text-decoration-none">About</a>
                </li>
                <li>
                  <a href="customer.php" class="text-decoration-none">Customers</a>
                </li>
                <li>
                  <a href="#footer" class="text-decoration-none">Contacts</a>
                </li>
            </ul>
        </nav>
    </div>

    <?php  
      echo '<h1 class="intro" style="letter-spacing: 2px; font-weight: bold;"><center>Transaction History</center></h1>';
      echo '<table class="listtable table-light table  table-striped table-hover mt-2"  style="opacity: 0.9; width: 78%; margin: auto;">
      <tr class="table-dark">
          <th>ID</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount (in &#8377;)</th>
      </tr>';
          $server = "localhost";
          $username = "root";
          $password = "";
          $database = "bank_system";
          // Create a database connection
          $con = mysqli_connect($server, $username, $password, $database);

          // Check for connection success
          if(!$con){
              die("connection to this database failed due to" . mysqli_connect_error());
          }
            
          $sql = "SELECT his_id,sender,reciever,amount FROM history;";
          
          // Execute the query
              $result=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($result)){
                  // var_dump($row);
                  echo '<tr>
                  <td>'.$row["his_id"].'</td>
                  <td>'.$row["sender"].'</td>
                  <td>'.$row["reciever"].'</td>
                  <td>'.$row["amount"].'</td>
              </tr>';
                }

          echo'
          </table>';
    ?><br>
  </div>
  <!----------FOOTER---------->
  <footer id="footer">
      <p>&copy; Copyright 2021 <span class="footer_logo">Sparks Bank</span></p>
      <div class="social-icon">
      <a href="https://www.linkedin.com/in/darshan-patel-a25a95189/"><i class="fab fa-linkedin-in"></i></a>
            <a href="mailto: jabuanidarshan.dj@gmail.com"><i class="fas fa-envelope"></i></i></a>
      </div>
  </footer>
</body>

</html>