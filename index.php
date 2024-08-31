<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  /* .bg{
    background-image:url(WhatsApp\ Image\ 2024-08-30\ at\ 12.51.24_ea9af8e7.jpg);
    background-size: 1600px 1200px;
    background-repeat: no-repeat;
    background-attachment: fixed;
    backdrop-filter: blur(99px);
  } */
</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ganesh Transport</title>
</head>

<body class="bg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <img src="WhatsApp Image 2024-08-30 at 12.51.24_ea9af8e7.jpg" alt="im" width="50px" height="50px"> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>

      </ul>
   
    </div>
  </div>
</nav>

    <?php
    if (isset($_GET['err'])) {
        echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> Incorrect password and email.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          
        </button>
      </div>';
    }
    ?>

    <div class="container my-4">
        <h1>Ganesh Construction</h1>
        <form method="POST" action="dbconn.php">

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-dark my-2">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>