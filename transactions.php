<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Azeret+Mono&display=swap" rel="stylesheet">




    <title>Transactions Details - Dream Bank</title>

    <style>
        .footer-basic {
            position: relative;
            display: block;
            margin-top: -200px;
            top: 1600px;
            margin-left: -500px;
            padding-left: 500px;
            margin-right: -300px;
            padding-right: 300px;

        }
    </style>
</head>

<body style="background-color:white;">
    <?php include 'start.php'; ?>

    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark  fixed fixed-top" style=" background-color:#861f41; color:white ;font-family:'Inter', sans-serif; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
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
        th,
        td {
            text-align: center;
        }
    </style>

    <center>



        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div style="width:80%; background-color:#861f41; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Transaction Details</h1>
            </div>
            <?php

            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection not established: " . mysqli_connect_error());
            } else {

                $sql = "SELECT * FROM `transactions`";
                $result = mysqli_query($conn, $sql);
            ?>
                <table class="table" style="margin-top: 30px; background-color:whitesmoke">
                    <thead>
                        <tr>
                            <th scope="col">Sender</th>
                            <th scope="col">Reciever</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>

                    <style>
                        .mybtn {

                            box-shadow: 2px 2px 10px black;
                            border-radius: 30px;
                            font-weight: bold;
                            background-color: #861f41;
                            color: white;
                        }

                        .mybtn:active {
                            background-color: white;
                            color: #861f41;
                        }
                    </style>
                    <?php
                    echo "<tbody>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        if (!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount']))) {
                            echo    '
            <tr>
              <td>' . $row['sender'] . '</td>
              <td>' . $row['receiver'] . '</td>
              <td>' . $row['amount'] . '</td>
              <td>'; ?> <?php if ($row['status'] == "succeed") {
                                echo '<b><p style="color:green;">Succeed</p></b>';
                            } else {
                                echo '<b><p style="color:red;">Failed</p></b>';
                            } ?>
                <?php echo '</td>
              </tr>';
                        }
                    }
                }
                echo "</tbody>";
                ?>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>