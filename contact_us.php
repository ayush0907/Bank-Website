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
    <title>Contact us - Dream Bank</title>
</head>

<body style="background-image:url('images/abt.png'); padding-top:8%;">
    <?php include 'start.php'; ?>

    <style>
        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark  fixed fixed-top" style="background-color:#861f41; color:white ;font-family:'Inter', sans-serif; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
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


    <?php

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection not established: " . mysqli_connect_error());
    } else {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $msg = $_POST['message'];

            $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you ' . $name . ' for contacting us!
        </div>
      </div>';
            } else {
                echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops ' . $name . '! Something went wrong!
        </div>
      </div>';
            }
        }
    }

    ?>
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
    </style>

    <center>

        <div class="container" style="padding:10px 80px 10px 80px; margin-top:2%;">
            <div style="width:80%; background-color:#861f41; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Contact Us</h1>
            </div>

            <div class="container" style="  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contact_us.php" method="post">
                    <input type="text" required class="formin form-control" name="name" id="" placeholder="Name"><br><br>
                    <input type="email" required class="formin form-control" name="email" id="" placeholder="Email"><br><br>
                    <textarea name="message" required class="" style="border-radius:20px; padding: 5px 5px 5px 15px;" placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                    <br><br><input class="btn mybtn btn-outline-light" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </center>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>