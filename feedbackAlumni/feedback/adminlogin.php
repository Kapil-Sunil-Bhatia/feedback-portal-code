<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");
$dttim = date("Y-m-d H:i:s");
$_SESSION['dttim'] = $dttim;
$dt = date("Y-m-d");
if (isset($_SESSION['adminid'])) {
  echo "<script>window.location='admindashboard.php';</script>";
}
include("database.php");
//  
if (isset($_POST["btnsubmit"])) {
  $sql = "SELECT * FROM admin WHERE loginid='$_POST[loginid]' AND password='$_POST[loginpassword]' AND status='Active'";
  $qsql = mysqli_query($con, $sql);
  if (mysqli_num_rows($qsql) == 1) {
    $rs = mysqli_fetch_array($qsql);
    $_SESSION['adminid']  = $rs['adminid'];
    echo "<script>window.location='admindashboard.php';</script>";
  } else {
    echo "<script>alert('Entered Login credentials not valid..');</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alumni Feedback - Admin Login Window</title>
    <link rel="shortcut icon" href="FAVICON1.png" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
    <style>
    body {
        background-image: linear-gradient(#9b2a286b, #00000000), url('greybg.jpg');
        background-size: cover;
        background-attachment: fixed;
    }

    .heading {

        text-align: center;
        font-weight: bolder;
        background-color: #9b2928;
        color: white;
    }

    nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
        align-items: center;
    }

    #logo {
        height: 6rem;
        width: 100%;
    }

    .row {
        display: flex;
        flex-direction: row;
        margin-right: 5px;
    }

    .row a {
        color: black;
        text-decoration: none;
        margin: 0.3rem;
    }

    .row a:hover {
        color: #b7202e;
    }

    #trust {
        height: 50px;
        width: 100px;
    }

    button {
        border: 0.3px solid #000000;
        background-color: transparent;


    }

    .card {

        border: 1px solid red;
        box-shadow: 5px 5px 8px white;
    }

    .login-box {

        border-radius: 15px;
    }

    footer {
        background: #9B2928;
        height: auto;
        width: 100vw;
        font-family: 'Poppins', sans-serif;
        padding-top: 20px;
        color: white;
        padding-bottom: 10px;

    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .footer-content h6 {

        line-height: 1.5rem;
        font-weight: bold;
        font-size: 17px;
    }

    .footer-content p {

        margin: 10px auto;
        line-height: 30px;

    }

    @media (max-width:640px) {
        #trust {
            width: 50px;
            height: 25px;
        }
    }

    @media (max-width:789px) {
        #trust {
            width: 50px;
            height: 25px;
        }
    }

    @media (min-width: 768px) {
        .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: fit-content;

        }

    }

    @media (max-width:480px) {
        .icons {
            display: none;
        }

        #logo {
            height: 3rem;
            width: 100%;
        }

        .row {
            display: none;
        }

        #trust {
            width: 50px;
            height: 25px;
        }

        @media (max-width: 850px) {
            .icons {
                display: none;
            }

            .row {

                display: block;
            }

            #trust {
                width: 50px;
                height: 25px;
            }
        }

    }

    /* ===== Google Font Import - Poformsins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .main {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .container {
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 0 20px;

    }

    .container .forms {
        display: flex;
        align-items: center;
        height: auto;
        width: 200%;
        transition: height 0.2s ease;

    }

    .forms {
        box-shadow: 10px 10px 10px red;
    }

    .container .form {
        width: 50%;
        padding: 30px;
        background-color: #fff;
        transition: margin-left 0.18s ease;
    }

    .container.active .login {
        margin-left: -50%;
        opacity: 0;
        transition: margin-left 0.18s ease, opacity 0.15s ease;
    }

    .container .signup {
        opacity: 0;
        transition: opacity 0.09s ease;
    }

    .container.active .signup {
        opacity: 1;
        transition: opacity 0.2s ease;
    }

    .container.active .forms {
        height: 600px;
    }

    .container .form .title {
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #9b2928;
        border-radius: 25px;
    }

    .form .input-field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }

    .input-field input {
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid) {
        border-bottom-color: #4070f4;
    }

    .input-field i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid)~i {
        color: #4070f4;
    }

    .input-field i.icon {
        left: 0;
    }

    .input-field i.showHidePw {
        right: 0;
        cursor: pointer;
        padding: 10px;
    }

    .form .checkbox-text {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .checkbox-text .checkbox-content {
        display: flex;
        align-items: center;
    }

    .checkbox-content input {
        margin-right: 10px;
        accent-color: #4070f4;
    }

    .form .text {
        color: #333;
        font-size: 14px;
    }

    .form a.text {
        color: #4070f4;
        text-decoration: none;
    }

    .form a:hover {
        text-decoration: underline;
    }

    .form .button {
        margin-top: 35px;
    }

    .form .button input {
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #9b2928 !important;
        cursor: pointer;
        border-radius: 100px;
        transition: all 0.3s ease;
    }

    .button input:hover {
        background-color: #265df2;

    }

    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }

    .heading1 {
        text-align: center;
        margin: auto;
        color: #000;
        font-size: xx-large;
        font-family: 'PT Sans', sans-serif;
        font-weight: 700;
        border-bottom: 1px #9b2928 solid;
    }

    .inputs {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
        margin: auto;
        margin-top: 25px;
    }

    .inputs label {
        font-size: 13px;
        color: #000000;
        font-weight: 600;
        font-size: medium;
        font-family: 'PT Sans', sans-serif;
    }

    .inputs input {
        flex: 1;
        padding: 13px;
        border: 1px solid #ebebeb;
        background-color: #ebebeb;
        border-radius: 20px;
        font-size: 16px;
        transition: all 0.2s ease-out;
        color: #000;
        font-weight: 300;
        font-family: 'PT Sans', sans-serif;
    }

    .row1 input:focus {
        background-color: #ebebeb;
        transform: scale(1.05);
        font-family: 'PT Sans', sans-serif;
    }

    .row1 input::placeholder {
        color: #000000;
        font-family: 'PT Sans', sans-serif;
    }

    .heading {
        box-sizing: border-box;
        width: fit-content;
        background-color: #9b2928;
        border-radius: 0.7rem;
        margin: auto;
        color: #fff;
        text-align: center;
        padding: 10px;
        font-family: 'PT Sans', sans-serif;
    }
    </style>

    <!-- navigation bar -->

    <div class="nav" style="background-color:#ffffff;">
        <nav>
            <div class="img">

                <img id="logo" src="images/Somaiya1.png" alt="">

            </div>
            <div class="row">

                <div class="icons">
                    <button type="button" name="button"> <a href="https://www.somaiya.edu.in/en" target="_blank"
                            style="color: black, !important;">
                            <i class="bi bi-globe"></i> somaiya.edu
                        </a></button>
                    <a href="https://www.facebook.com/kjsieitofficial" target="_blank">
                        <i class="bi bi-facebook style='#000000'"></i>
                    </a>
                    <a href="https://twitter.com/kjsieit1" target="_blank">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/kjsieit_22/" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/kjsieitofficial" target="_blank">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGGuSH8KhlwSwAAAYLQ0-lI197THvyK68qNQUCy_45bItZlyVxB3zJIOqkcWsZbXs1Fbm5WsDzldL7D_aRcaijw5KvMXS4IdirAPV3v2BqILFUp5pcJxb0qpO5rUYdLIvVI5aE=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fkjsieit"
                        target="_blank">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <img id="trust" src="images/Trust.png" alt="">
                </div>
            </div>
        </nav>
    </div>
    <br>
    <!-- alumni Login Window -->

    <div class="heading">

        <h1 style="font-weight: bold; margin-bottom: 0px">Admin Login</h1>
    </div>
    <br>

    <!-- Login Form -->

    <div class="main">

        <div class="container">

            <div class="forms">

                <div class="form login">
                    <p class="heading1">Login</p>
                    <br>
                    <form action="" method="post">
                        <div class="inputs">
                            <label for="email">Username</label>
                            <input type="text" name="loginid" id="loginid" class="form-control"
                                placeholder="Enter your username" required="required">
                            <i class="uil uil-envelope icon"></i>
                        </div>

                        <div class="inputs">
                            <label for="email">Password</label>
                            <input type="password" name="loginpassword" id="loginpassword" class="form-control"
                                placeholder="Enter your password" required="required">
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>
                        <br>
                        <div class="input-field button">
                            <input type="submit" value="Login " name="btnsubmit">
                        </div>
                    </form>

                    <!-- <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="alumniregister.php" class="text signup-link">Signup Now</a>
                    </span>
                </div> -->
                </div>


                <br>
                <br>

            </div>
        </div>
    </div>
    <br>
    <!--<div style="background-color:#ffdeb4; height:50px"></div>  -->
    <footer>
        <div class="footer-content">
            <h6>Department Of Computer Engineering</h6>
            <h6 style="font-size: 16px;"><i class="bi bi-c-circle"></i> 2022-23</h6>
            <a href="../../aboutus.php" style="color:white !important">
                <h6>Guided by : Prof. Jyoti Wadmare</h6>
                <h6>Developed by : Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</h6>
            </a>
        </div>
    </footer>

    <script>
    const container = document.querySelector(".container"),
        pwShowHide = document.querySelectorAll(".showHidePw"),
        pwFields = document.querySelectorAll(".password"),
        signUp = document.querySelector(".signup-link"),
        login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", () => {
            pwFields.forEach(pwField => {
                if (pwField.type === "password") {
                    pwField.type = "text";

                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                } else {
                    pwField.type = "password";

                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            })
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", () => {
        container.classList.add("active");
    });
    login.addEventListener("click", () => {
        container.classList.remove("active");
    });
    </script>

</body>

</html>