<?php
$bdd= mysqli_connect("localhost","root","","biblio");
if($bdd->connect_error){
    die('connection failed:' .$bdd->connect_error);

}


?>