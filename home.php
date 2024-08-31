<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
     #button{
        border-radius: 0px; 
        border: 0;
        

      }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <title>Ganesh Transport</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <img src="" alt="im" width="50px" height="50px"> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="data.php">Insert data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
      </ul>
   
    </div>
  </div>
</nav>
<div class="row my-4">
  <div class="col text-end">
<div class="heading">
<h2>Trip Data -</h2>
</div>
</div>
<div class="col my-2">
  <form method="get" action="home.php">
<input class="form-control-xs" list="datalistOptions"  placeholder="0001" id="num" name="num" >
<input type="submit" class="btn-sm btn-success mx-1 " id="button">
<datalist id="datalistOptions">
<?php
          $num=$_GET['num'];
          $conn = mysqli_connect("localhost", "root", "", "ganesh");
          $que = "SELECT * FROM `trucknum` where `truck_num`='$num'";
          $res = mysqli_query($conn, $que);
           while($row = mysqli_fetch_assoc($res)) {
          echo  '<option value='.$row['truck_num'].'>';
           }
          
  ?>
</datalist>
</form>
  

</div>
</div>


<div class="container my-4 text-center">
<table id="mytable" class="table table-striped table-bordered"  style="width:100%">
        <thead>
            <tr>
                <th class="text-center">Date</th>
                <th class="text-center" colspan="2">Trip Route
                </th>
                <th class="text-center" colspan="2">K.M Reading</th>
                <th class="text-center">Total K.M</th>
                <th class="text-center" colspan="2">Diesel</th>
                <th class="text-center">Avg.</th>
                <th class="text-center">Remarks(Points)</th>
                <th class="text-center">Last trip</th>
                <th class="text-center">weight(Kata)</th>
                <th class="text-center">Load/Unload</th>
                <th class="text-center">Bhathu</th>
                <th class="text-center">Other</th>
                <th class="text-center">Adv silak</th>
                <th class="text-center">Deva patra</th>
                <th class="text-center">Actual payment</th>
                <th class="text-center">O/S hisaab</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <td></td>
                <th class="text-center">From</th>
                <th class="text-center">to</th>
                <th class="text-center">Start</th>
                <th class="text-center">end</th>
                <td></td>
                <th class="text-center">Ltr</th>
                <th class="text-center">Amount</th>
                <td colspan="11"></td>
                
            </tr>
        </thead>
        <tbody>
          
          <?php
          if(isset(($_GET['num']))){
            $id=$_GET['num'];
          $conn=mysqli_connect("localhost","root","","ganesh");
          $que="SELECT * FROM `transport` where `truck_id`='$id'";
          
          $res=mysqli_query($conn,$que);
          if(mysqli_num_rows($res)>0){
          while($row=mysqli_fetch_assoc($res)){
            echo '<tr>
            <th class="text-center">'.$row['date'].'</th>
            <th class="text-center">'.$row['from'].'</th>
            <th class="text-center">'.$row['to'].'</th>
            <th class="text-center">'.$row['start'].'</th>
            <th class="text-center">'.$row['end'].'</th>
            <th class="text-center">'.$row['km'].'</th>
            <th class="text-center">'.$row['ltr'].'</th>
            <th class="text-center">'.$row['amt'].'</th>
            <th class="text-center">'.$row['avg'].'</th>
            <th class="text-center">'.$row['remark'].'</th>
            <th class="text-center">'.$row['last'].'</th>
            <th class="text-center">'.$row['weight'].'</th>
            <th class="text-center">'.$row['load'].'</th>
            <th class="text-center">'.$row['bhathu'].'</th>
            <th class="text-center">'.$row['other'].'</th>
            <th class="text-center">'.$row['adv'].'</th>
            <th class="text-center">'.$row['deva'].'</th>
            <th class="text-center">'.$row['actual'].'</th>
            <th class="text-center">'.$row['os'].'</th>
          </tr>';
        
          }
        }
        else{
           echo '<tr><td colspan="20">No Data Found</td></tr>';
         }
      }
          else{
            echo '<tr><td colspan="20">No Data Found</td></tr>';
          }
      
        
          
      
        
      
          ?>
        </tbody>
    </table>
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
    
    <script>
  function updateButton(value) {
    document.getElementById("dropdown-button").innerHTML = value;
   
    }
</script>
    
</script>
</body>

</html>