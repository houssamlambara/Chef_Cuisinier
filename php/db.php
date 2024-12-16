<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "chef_cuisinier_base";

$conn = new mysqli($host,$user,$pass,$dbname);

if(!$conn){
    echo "Connexion impossible";
}