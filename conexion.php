<?php

$host = "bbc4ilemonnedslggges-mysql.services.clever-cloud.com";
$user = "uamc0fgrjolykgz9";
$pass = "C7nxnyB7do2jH94EJJuw";
$bd = "bbc4ilemonnedslggges";

$conex = new mysqli($host,$user,$pass,$bd);
if($conex->connect_errno){
    echo "Error al conectar....";
}

?>