<?php
require_once __DIR__ . '/Models/Accessori.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Category.php';

$cani = new Category('cani');
$gatti = new Category('gatti');
$uccelli = new Category('uccelli');
$pesci = new Category('pesci');

$crockCane = new Cibo($cani,'DogCrock','ottime crock',10,500,'biologico');
$pelucheTopo = new Giochi($gatti,'PelucheDeluxe','peluche per gatti',2,'morbido','8x5');
$voliera = new Accessori($uccelli,'volieraSuper','voliera per uccelli',80,'legno','100x80');
$acquario = new Accessori($pesci,'acquario','un bel acquario',200,'vetro e alluminio','150x90x80');


$products = [
    $crockCane,
    $pelucheTopo,
    $voliera,
    $acquario
];

?>