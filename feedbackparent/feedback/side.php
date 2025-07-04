<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="FAVICON1.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
  <style>
    .card-deck .card {
      margin-left: 45px;
      margin-right: 20px;
      padding: 10px;
    }

    .card-title {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;

    }

    .card {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      border: 2px solid #9b2928;
      border-radius: 10px;
      box-shadow: 5px 5px 8px gray;
    }

    .card .card-title {
      font-size: x-large;
      font-weight: bold;
      color: #9b2928;
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

    .heading {

      text-align: center;
      font-weight: bolder;
      background-color: #9b2928;
      color: white;
    }

    .login-box {

      border-radius: 15px;
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
  </style>
  <div class="nav">
    <nav>
      <div class="img">

        <img id="logo" src="images/Somaiya1.png" alt="">

      </div>
      <div class="row">

        <div class="icons">
          <button type="button" name="button"> <a href="https://www.somaiya.edu.in/en" target="_blank" style="color: black, !important;">
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
          <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQGGuSH8KhlwSwAAAYLQ0-lI197THvyK68qNQUCy_45bItZlyVxB3zJIOqkcWsZbXs1Fbm5WsDzldL7D_aRcaijw5KvMXS4IdirAPV3v2BqILFUp5pcJxb0qpO5rUYdLIvVI5aE=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fkjsieit" target="_blank">
            <i class="bi bi-linkedin"></i>
          </a>
          <img id="trust" src="images/Trust.png" alt="">
        </div>
      </div>
    </nav>
  </div>
  <div>
    <br><br>

    <div class="card-deck">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
            additional content. This card has even longer content than the first to show that equal height
            action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    <br><br>
    <div class="card-deck">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
            additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
          </p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
            additional content. This card has even longer content than the first to show that equal height
            action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>