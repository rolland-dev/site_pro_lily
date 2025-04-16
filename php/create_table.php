<?php

require ('./config.php');

// creation table users procédurale
$sql = "create table if not exists users(
    id int(6) unsigned auto_increment primary key,
    login varchar(50) not null,
    mdp varchar(150) not null,
    role varchar(15) not null,
    isVerified bool null)";

if(!mysqli_query($link,$sql)){
    echo "Erreur de création";
}

// creation table produits procédurale
// $sql = "create table if not exists produits(
//     id int(6) unsigned auto_increment primary key,
//     titre varchar(150) not null,
//     entete text not null,
//     type varchar(150) not null,
//     heures varchar(30) not null,
//     objectifs text not null,
//     image varchar(100) null)";

// if(!mysqli_query($link,$sql)){
//     echo "Erreur de création";
// }

// creation table calendrier procédurale
// $sql = "create table if not exists calendrier(
//     id int(6) unsigned auto_increment primary key,
//     formation varchar(150) not null,
//     date_d date not null,
//     date_f date not null,
//     lieu varchar(100) not null,
//     place integer not null,
//     place_r integer null,
//     valide integer null)";

// if(!mysqli_query($link,$sql)){
//     echo "Erreur de création";
// }

// creation table reservation procédurale
// $sql = "create table if not exists reservation(
//     id int(6) unsigned auto_increment primary key,
//     formation varchar(150) not null,
//     date_d date not null,
//     date_f date not null,
//     lieu varchar(100) not null,
//     nom varchar(20) not null,
//     prenom varchar(20) not null,
//     email varchar(50) not null)";

// if(!mysqli_query($link,$sql)){
//     echo "Erreur de création";
// }




$link -> close();

?>