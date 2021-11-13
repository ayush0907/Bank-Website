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

    <title>DB | Dream Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background: rgb(255, 255, 255) center no-repeat;
            text-align: center;
        }

        @media screen and (orientation:landscape) {
            #lock {
                display: none;
            }

            #container {
                display: block;
            }
        }

        @media screen and (orientation:portrait) {
            #lock {
                display: block;
            }

            #container {
                display: none;
            }
        }
    </style>
</head>

<body style="background-color:white;">

    <div id="lock"><img src="images/mobile_rotate.png" alt="" style="width:50%; margin-top:50%;"><br>
        <h1 style="color:black; margin-top: 25px;"><b>Rotate your device. </b><br>Landscape mode is only supported.</h1>
    </div>

    <div id="container">

        <?php include 'start.php'; ?>


        <style>
            .nav-link:hover {
                text-decoration: underline;
            }



            .mybtn {
                margin-bottom: 10px;
                box-shadow: 2px 2px 10px black;
                border-radius: 30px;
                background-color: white;
                font-weight: bold;
                color: black;
            }

            .mybtn:active {
                background-color: black;
                color: white;
            }
        </style>

        <nav class="navbar navbar-expand-lg  navbar-dark fixed fixed-top" style=" background-color:#861f41;  ;font-family:'Inter', sans-serif; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
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
                            <a style="color:white" class="nav-link active text-nowrap " aria-current="page" href="index.php">Home</a>
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



        <div class="container-large" style="color:#861f41; height:500px; width: 100%; padding:8% 2% 2% 2%; background-color:white;">
            <div class="row">
                <div class="col" style="margin-left: 5%;">
                    <br><br>&nbsp;<p class="zoomfont" style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome To <br> DREAM BANK</b></p>
                </div>
                <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                    &nbsp;<img src="images/finance.png" class="zoomin" alt="" style="width:0px;">
                </div>
            </div>
        </div>
        <img src="images/abstbg2.png" alt="" style="width:100%; height:100%; position:absolute; z-index:-1">

        <center style="margin:60px 0px 20px 0px;">
            <div class="container" style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
                <h1 style="text-shadow:2px 2px 2px gray; color:#861f41;"><b>Facilities</b></h1>
                <div class="container" style="margin:30px 0px 20px 0px;">
                    <div class="row">
                        <div class="col-lg">
                            <div style="background-color:white; color:#861f41; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-users fa-7x"></i><br><br>
                                <a href="customer_details.php"><button type="button" class="btn btn-outline-light mybtn">
                                        Customers Details</button></a><br>
                                <h6>Here, you will get details of every customer of the bank.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div style="background-color:white; color:#861f41; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                                <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Send
                                        Money</button></a><br>
                                <h6>Here, we provide facility to send money.</h6>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div style="background-color:white; color:#861f41; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                                <i class="fas fa-coins fa-7x"></i><br><br>
                                <a href="check_balance.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                        Balance</button></a><br>
                                <h6>Here, you will get statement of remaining balance of your account.</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </center>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function() {

                $(".zoomin").animate({
                    width: '400px'
                }, '5000', 'linear');
                $(".zoomfont").animate({
                    fontSize: '71px'
                }, '5000', 'linear');
            });
        </script>

    </div>

</body>

</html>