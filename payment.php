<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="icon" href="./img/Approval.png">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
    <?php  
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "bank_system";
        // Create a database connection
        $con = mysqli_connect($server, $username, $password, $database);

        // Check for connection success
        if(!$con){
            die("Connection to this database failed due to" . mysqli_connect_error());
        }
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $sender = $_POST['sender'];
            $rec = $_POST['rec'];
            $amount = $_POST['amount'];
        }
        $sql3 ="SELECT balance FROM customer where Name='$sender';";
        $sql = "UPDATE customer SET balance=(balance-$amount) where Name='$sender';";
        $sql1 = "UPDATE customer SET balance=(balance+$amount) where Name='$rec';";
        $sql2 = "INSERT INTO history (sender,reciever,amount)VALUES('$sender','$rec',$amount)";
            $result3=mysqli_query($con,$sql3);
        while($row3 = mysqli_fetch_array($result3)){
            if($amount>$row3["balance"]){
                echo "<script> alert(' ❌ Insufficient Balance')</script>";
                echo "<script> window.location.href='customer.php'</script>";
            }
            else{
                $result=mysqli_query($con,$sql);
                $result1=mysqli_query($con,$sql1);
                $result2=mysqli_query($con,$sql2);
                echo "<script> alert(' ✅ Your Transaction is Successful ')</script>";
                echo "<script> window.location.href='index.html'</script>";
            }
        }
    ?>
 </body>
</html>