<?php
if(isset ($_POST['username']) || isset ($_POST['password']))  {

$username =$_POST['username'];
$password =$_POST['password'];


}  
if(empty($_POST['username'])){
echo'Entre your username !';
}
if(empty($_POST['password'])){
    echo'Entre your password !';
}
