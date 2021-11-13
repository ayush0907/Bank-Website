<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono&display=swap" rel="stylesheet">




    <title>Send Money - Dream Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color:white; padding-top:8%;">




    <?php include 'start.php'; ?>
    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark fixed fixed-top" style="background-color:#861f41; color:white ;font-family:'Inter', sans-serif; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="images\logo.png" alt="" style="height: 80px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a style="color:white" class="nav-link active text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a style="color:white" class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color:white" class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color:white" class="nav-link text-nowrap" href="customer_details.php">Customer Details</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color:white" class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a style="color:white" class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: #861f41;
            font-weight: bold;
            color: white;
        }

        .mybtn:hover {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: #861f41;
        }

        .mybtn:active {
            background-color: #861f41;
            color: white;
        }

        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

    <center>

        <div class="container" style="margin-top:2%;">
            <div style="width:80%; background-color:#861f41; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Money Transfer</h1>
            </div>
            <br><br>
            <div class="" style=" backdrop-filter: blur(5px);  border-radius:5px;  ">
                <form action="send_money.php" method="post">
                    <table>
                        <tr>
                            <td><input type="number" required class="formin form-control" name="accno1" id="" placeholder="Enter Sender's Account Number" value="<?php if (isset($_GET['reads'])) {
                                                                                                                                                                        echo $_GET['reads'];
                                                                                                                                                                    } ?>"></td>
                        <tr>
                        <tr>
                            <td><input type="number" required class="formin form-control" name="accno2" id="" placeholder="Enter Reciever's Account Number"></td>
                        </tr>
                        <tr>
                            <td><input type="number" required class="formin form-control" name="amount" id="" placeholder="Enter Amount to Transfer"></td>
                        </tr>
                    </table>
                    <br><input class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br><br>
                    <p style="color:black;">Do you want to check your balance? Check <a href="check_balance.php">Here</a></p>
                </form>
            </div>
        </div>


        <?php

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection not established: " . mysqli_connect_error());
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                $sender = $_POST['accno1'];
                $amount = $_POST['amount'];
                $reciever = $_POST['accno2'];


                $checkblcquery = "SELECT blc FROM users where accno='$sender'";
                $checkblc = mysqli_query($conn, $checkblcquery);
                $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

                if ($ava_blc >= $amount) {
                    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
                    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
                    $result1 = mysqli_query($conn, $sql1);
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result1 && $result2) {
                        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

                        $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
                        $sqltransact = mysqli_query($conn, $sqltran);
                    } else {
                        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
                        $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
                        $sqltransact = mysqli_query($conn, $sqltran);
                    }
                } else {
                    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
                    $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
                    $sqltransact = mysqli_query($conn, $sqltran);
                }
            }
        }
        ?>
    </center>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    < </body>

</html>