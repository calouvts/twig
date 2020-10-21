<?php
/* echo __DIR__ . '/../vendor/autoload.php'; */
require __DIR__ . '/../vendor/autoload.php';
/* require "/home/wilder/quests/quetetwig/vendor/autoload.php"; */

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../view');
$twig = new Twig\Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];



echo $twig->render('index.html.twig', [ 'products' => $products]);


