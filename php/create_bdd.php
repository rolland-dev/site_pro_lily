<?php

$host="localhost";
$user ="root";
$pass="";

$link = mysqli_connect($host,$user,$pass);


//creation BDD
$sql = "create database if not exists lilypro";

if(mysqli_query($link,$sql)){
    
    }else {
        echo "Création KO";
    }

?>