<?php
$myhost="localhost";
$myuser="root";
$mypassw="";
$mybd="Tlinos";

$link = mysqli_connect($myhost, $myuser, $mypassw, $mybd)

or die("Error " .mysqli_error($link));
?>