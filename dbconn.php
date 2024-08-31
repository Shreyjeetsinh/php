<?php
$err=false;

if($_SERVER['REQUEST_METHOD']=='POST'){
$email2=$_POST['email1'];
$pass2=$_POST['pass1'];
$con=mysqli_connect("localhost","root","","php1");
$que="SELECT * from `user` where email1='$email2' and pass1='$pass2'";
$res=mysqli_query($con,$que);
if(mysqli_num_rows($res)){
    header("location:data.php");
}
else{
    header('location:index.php?err=true');
}

}
else{
    echo 'method is get';
}
?>