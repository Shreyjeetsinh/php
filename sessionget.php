<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'welcome'.$_SESSION['username'];
    echo '<br> your fav cat is'.$_SESSION['fav'];
    echo '<br>';

}
else{
    echo 'please login to continue';
}


?>