<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<body>

    <div id="container">
        
    <?php include 'spin.php'; ?>

    <style>

        .nav-link:hover {
            text-decoration: underline;
        }
        .mybtn{
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active{
            background-color: black;
            color: white;
        }
        
    </style>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top">

    <div class="container-fluid">
        <a href="index.php">
            <img src="images/logo-bs.png" alt="" style="height: 80px; margin-left: 25px; margin-top: 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target= "#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <b>
            <ul class="navbar-nav">
                <li class="nav-item nav-links" style="margin-left: 15px;">
                <a href="home.php" class="nav-link active text-nowrap" aria-current="page">
                    Home
                </a>
                </li>

                <li class="nav-item" style="margin-left: 15px;">
            <a href="send_money.php" class="nav-link text-nowrap">Send Money</a>
            </li>

            <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>


                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
            </ul>
        </b>
    </div>
    </nav>

    <div class="container-large" style="color: white; height: 600px; width: 100%; padding: 8% 2% 2% 2%; background-color:white">

    <div class="row">
        <div class="col" style="margin-left: 5%;">
            <br><br>&nbsp;
            <p class="zoom-font" style="font-size: 50px ; margin-top: 100px; color: #212529; text-shadow: 5px 3px 3px grey; text-align: center;">
                <b>
                    Welcome To Sparks Bank
                </b>
            </p> 
            <button class="btn mybtn btn-outline-light" type="button" style="width: 190px; border-radius:15px; height: 50px; border:1px solid black; background-color: white; color: black; margin-left: 50px;"> 
               <a href="about_us.php" style="text-decoration: none; color:black"> <b> <i> About Us </i> </b> </a>
            </button>
        </div>

        <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                &nbsp;
                <img src="images/finance-2.png" class="zoomin" alt="" style="width:0px;">
            </div>
    </div>
</div>

     <img src="images/bg-facilities-2.jpg" alt="" style="width: 100%; position: absolute; z-index: -1;">


     <center style="margin: 60px 0px 20px 0px;">
        <div class="container" style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px; margin-top: 150px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:black;"><b>Spark's Facilities</b></h1>

            <div class="container" style="margin:30px 0px 20px 0px;">
                <div id="buttons">
                <button class="btn mybtn btn-outline-light" type="button" style="width: 190px; border-radius:15px; height: 50px; background-color: white; color: black; margin-left: 0px; "> 
               <a href="send_money.php" style="text-decoration: none; color:black"> <b> <i> Transfer Money </i> </b> </a>
            </button>
                    
            <button class="btn mybtn btn-outline-light" type="button" style="width: 190px; border-radius:15px; height: 50px; background-color: white; color: black; margin-left: 15px; "> 
               <a href="all_cust.php" style="text-decoration: none; color:black"> <b> <i> View All Customers </i> </b> </a>
            </button>
            <!-- <ul class="but">
                <li class="but-item1" style="width:190px; border-radius:15px; height:50px; background-color: white; color:black; margin-left: 0px; cursor: pointer;">
                    <a href="send_money.php" style="text-decoration: none; color: black;"> <b><i> Transfer Money</i></b></a>
                </li>

                <li class="but-item2" style="width:190px; border-radius:15px; height:50px; background-color: white; color:black; margin-left: 0px; cursor: pointer;">
                    <a href="all_cust.php" style="text-decoration: none; color: black;"> <b><i> View All Customers </i></b></a>
                </li>
            </ul> -->
                </div>
            </div>
        </div>
     </center>
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

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