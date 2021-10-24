<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../vendor/autoload.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);

require_once __DIR__ . '/../src/public/products.php';
