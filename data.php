
 <?php
// session_start();

// if (isset($_POST['submit'])) {
//     $_SESSION['truck_num'] = $_POST['truck_num'];
// }

// if (isset($_SESSION['truck_num'])) {
//     $truck_num = $_SESSION['truck_num'];
// } else {
//     $truck_num = 'GJ-11-0001'; 
// }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Form Example</title>
  <style>
    /* Add some basic styling to the form */
    form {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Add some hover effects to the input fields */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      transition: border-color 0.2s ease-in-out;
    }

    input[type="text"]:hover,
    input[type="email"]:hover,
    input[type="password"]:hover {
      border-color: #aaa;
    }

    /* Add some basic styling to the submit button */
    .btn-submit {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-submit:hover {
      background-color: #3e8e41;
    }
    /* #number{
      width: 460px;
      border: 1;
      align-content: center;
    } */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- <img src="WhatsApp Image 2024-08-30 at 12.51.24_ea9af8e7.jpg" alt="im" width="50px" height="50px"> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <div class="text-end">
            <button type="button" class="btn btn-transparent text-white" data-bs-toggle="modal"
              data-bs-target="#exampleModal">Add Truck</button>
          </div>

          <li class="nav-item">
            <a class="nav-link" href="home.php">Trip Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
<!-- Modal Trigger Button -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Truck Number
</button> -->

<!-- Modal Form -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
    <form method="POST" action="newtruck.php">
    
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Truck Number</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="number" class="form-label">Truck Number</label>
            <input type="text" class="form-control" id="number" name="number" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-secondary">Clear</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>  
      </div>
      
    </div>
    
  </div>



  <?php
  if (isset($_GET['errr'])) {
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Woww!</strong> Data inserted successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          
        </button>
      </div>';
  }
  if (isset($_GET['showalert'])) {
    echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Added!</strong> Number inserted successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          
        </button>
      </div>';
  }
  if (isset($_GET['showerror'])) {
    echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> Number is already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          
        </button>
      </div>';
  }

  ?>


  <form method="POST" action="db.php">
    <div class="row my-2 mb-3">
      <div class="col">
        <h2>Trip Details</h2>
      </div>
      <div class="col text-end ">

      <!-- <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdown-button" data-bs-toggle="dropdown" aria-expanded="false">
    GJ-11-0001
  </button>
  <ul class="dropdown-menu">
          
        
  </ul>
      </div> -->
      
<input class="form-control-xs" list="datalistOptions" id="truck_id" name="truck_id" placeholder=" 0001">
<datalist id="datalistOptions">
<?php
          $conn = mysqli_connect("localhost", "root", "", "ganesh");
          $que = "SELECT * FROM `trucknum`";
          $res = mysqli_query($conn, $que);
           while($row = mysqli_fetch_assoc($res)) {
          echo  '<option value='.$row['truck_num'].'>';
           }
  ?>
</datalist>

      </div>

    </div>



    <div class="row">
      <div class="col mb-3">
        <label for="input1" class="form-label">Date</label>
        <input type="date" id="date" name="date" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input2" class="form-label">Trip-From</label>
        <input type="text" id="from" name="from" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input3" class="form-label">Trip-To</label>
        <input type="text" id="to" name="to" class="form-control" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label for="input4" class="form-label">K.M-Start</label>
        <input type="number" id="start" name="start" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input5" class="form-label">K.M-End</label>
        <input type="number" id="end" name="end" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input6" class="form-label">Total-Km</label>
        <input type="number" id="km" name="km" class="form-control" placeholder="">
      </div>

      <div class="col mb-3">
        <label for="input7" class="form-label">Diesel-Ltr</label>
        <input type="number" id="ltr" name="ltr" class="form-control" placeholder="">
      </div>

      <div class="col mb-3">
        <label for="input8" class="form-label">Diesel-Amt</label>
        <input type="number" id="amt" name="amt" class="form-control" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label for="input9" class="form-label">Average</label>
        <input type="number" id="avg" name="avg" class="form-control" placeholder="">
      </div>

      <div class="col mb-3">
        <label for="input10" class="form-label">Remarks</label>
        <input type="number" id="remark" name="remark" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Last-Trip</label>
        <input type="number" id="last" name="last" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Weight(Kata)</label>
        <input type="number" id="weight" name="weight" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Load/Unload</label>
        <input type="number" id="load" name="load" class="form-control" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="col mb-3">
        <label for="input11" class="form-label">Bhathu</label>
        <input type="number" id="bhathu" name="bhathu" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Other</label>
        <input type="number" id="other" name="other" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Advance-Silak</label>
        <input type="number" id="adv" name="adv" class="form-control" placeholder="">
      </div>
      <div class="col mb-3">
        <label for="input11" class="form-label">Deva patr</label>
        <input type="number" id="deva" name="deva" class="form-control" placeholder="">
      </div>

      <div class="col mb-3">
        <label for="input11" class="form-label">Actual-payment</label>
        <input type="number" id="actual" name="actual" class="form-control" placeholder="">
      </div>
    </div>
    <div class="col mb-3">
      <label for="number" class="form-label">O/S Hisaab</label>
      <input type="text" id="os" name="os" class="form-control" placeholder="">
    </div>

    <button type="submit" class="btn-submit">Submit</button>
    <button type="reset" class="btn-submit">Clear</button>

  </form>

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

  <!-- function hello(){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    
    } -->

  </script>
  <script>
  function updateButton(value) {
    document.getElementById("dropdown-button").innerHTML = value;
  }
</script>

</body>

</html>