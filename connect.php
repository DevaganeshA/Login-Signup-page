<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD= 'abcd';
$DATABaSE= 'signupforms';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);

if(! $con){
    // die(mysqli_error($con));
    echo " connection error";
}

?>