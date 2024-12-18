<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "restaurant";

$conn = new mysqli($host,$user,$pass,$dbname);

if(!$conn){
    echo "Connexion impossible";
}