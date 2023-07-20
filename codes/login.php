<?php
session_start();
$rememberUsername = "";

if (isset($_COOKIE['username'])){
    $rememberUsername = $_COOKIE['username'];
}   
?>
<html>
    <head>
        <title>Login</title>
        <!--  Include reference to CSS stylesheet here -->
        <link rel="stylesheet" type="text/css" href="stylesheets/style_login.css"/>
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
        <form method="post" action="doLogin.php">
            <h1 font-weight="bold">Login</h1>
            Username: <input id="idUsername" type="text" name="username" value="<?php echo $rememberUsername; ?>"/>
            <br/>
            Your password: <input id="idName" type="password" name="password" />
            <br/>
            <div >
            Remember Me: <input type="checkbox" name="remember" value="remember" id="input" /></div>
            <br/>
            <input id="submit" type="submit" value="Submit" />
            <br><br/>
            <h6>Forget password? Contact us at <a href="mailto:hotel@email.com">hotel@email.com</a><br/></h6>
        </form>
        <center> Not a member? <a href="register.php">Register</a> now! </center>
    </body> 
</html>
