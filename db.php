<?php
$errr=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST['date'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $km=$_POST['km'];
    $ltr=$_POST['ltr'];
    $amt=$_POST['amt'];
    $avg=$_POST['avg'];
    $remark=$_POST['remark'];
    $last=$_POST['last'];
    $weight=$_POST['weight'];
    $load=$_POST['load'];
    $bhathu=$_POST['bhathu'];
    $other=$_POST['other'];
    $adv=$_POST['adv'];
    $deva=$_POST['deva'];
    $actual=$_POST['actual'];
    $os=$_POST['os'];
    $truck_id=$_POST['truck_id'];
    

$conn=mysqli_connect("localhost","root","","ganesh");
$que = "INSERT INTO `transport` (`truck_id`,`date`, `from`, `to`, `start`, `end`, `km`, `ltr`, `amt`, `avg`, `remark`, `last`, `weight`, `load`, `bhathu`, `other`, `adv`, `deva`, `actual`, `os`) 
         VALUES ('$truck_id','$date', '$from', '$to', '$start', '$end', '$km', '$ltr', '$amt', '$avg', '$remark', '$last', '$weight', '$load', '$bhathu', '$other', '$adv', '$deva', '$actual', '$os')";
$res=mysqli_query($conn,$que);
if($res){
    header("location:data.php?errr=true");
}
else{
    echo "data not inserted";
}
}
else{
    echo "get method";
}
?>