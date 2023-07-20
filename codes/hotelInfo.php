<?php
session_start();
include "dbFunctions.php";

$hotelId = $_GET['hotelId'];

$query = "SELECT * FROM hotels WHERE hotelId=$hotelId";
$result = mysqli_query($link, $query) or die (mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)){
    $hotelId=$row['hotelId'];
    $hotelName=$row['hotelName'];
    $hotelAddress=$row['hotelAddress'];
    $picture=$row['picture'];
    $contactNo=$row['contactNo'];
    $description=$row['description'];

}

?>
<html>
    <head>
        <title>Hotel Reivews</title>
        <!--  Include reference to CSS stylesheet here -->
        <link rel="stylesheet" type="text/css" href="stylesheets/style_hotelreview.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
        <style>
        .fa-solid {
            background-color:#35CBDF;
            border-radius: 50%;
            color: #fff;
            font-size: 30px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            width: 60px;
        }
    </style>
    <body>
                <nav class="navbar navbar-expand-sm p-3 mb-2 navbar-custom">
            <div>
                <i class="fa fa-solid fa-hotel"  aria-hidden="true"></i>
            </div>
            <div class="container-fluid">

                <a class="navbar-brand" href="#"><span class="text-white">Hotel Review</a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="homepage.php"><span class="text-white">Hotels</a></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php"><span class="text-white">Contact Us</a></span>
                        </li>
                        <div class="justify-content-right">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><span class="text-white">Login/Register</a></span>
                        </li></div>  
                    </ul>
                </div>
            </div>
        </nav>

        <center>
        <?php if (!empty($hotelId)) { ?>
            <form id="form" name="hotelInfo" action="hotelReview.php?hotelId=<?php echo $hotelId; ?>" method="post" style="width:700px">
            <h1 font-weight="bold">Hotel Information</h1>
            Hotel Name:
            <?php echo $hotelName; ?><br><br/>
            Address:
            <?php echo $hotelAddress; ?><br><br/>
            Contact:
            <?php echo $contactNo; ?><br><br/>
            Description:<br/>
            <?php echo $description; ?><br><br/>
            <img class="card-img-top" src="images/<?php echo $picture ?>" alt="Card image"><br/>
            <br><br/>
            <input id="submit" type="submit" value="See Reviews"/>
            <br><br/>
            </form>
        <?php } ?>
    </center>
    </body>
</html>
