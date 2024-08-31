
  <?php
  $showalert=false;
  $showerror=false;
  if($_SERVER['REQUEST_METHOD']=='POST'){
  $number=$_POST['number'];
  $conn = mysqli_connect("localhost", "root", "", "ganesh");
  $existsql="SELECT * FROM `trucknum` WHERE `truck_num`='$number'";
  $result=mysqli_query($conn,$existsql);
  if(mysqli_num_rows($result)>0){
    header("location:data.php?showerror=true");
  }
  else{
  $que = "INSERT INTO `trucknum` (`truck_num`) VALUES ('$number')";
  $res = mysqli_query($conn, $que);
  if($res){
    header("location:data.php?showalert=true");
    
  }
  else{
    
  }

  }
}
  else{
    echo "Invalid Request";
  }

  
  ?>
