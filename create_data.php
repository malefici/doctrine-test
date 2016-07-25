<?php

use Doctrine\ORM\EntityManager;
use Verstak\Entity\Product;
use Verstak\Entity\Vendor;

require_once __DIR__ . '/bootstrap.php';

/** @var EntityManager $entityManager */
$entityManager; // эта переменная объявлена в bootstrap.php

// создаём производителя
$vendor = new Vendor();
$vendor
    ->setName('Производитель вещей №1');

$entityManager->persist($vendor); // говорим ORM, что нужно будет поработать с этим объектом

// создаём шмотку
$product1 = new Product;
$product1
    ->setName('Самая крутая одёжка')
    ->setDescription('Крутое, цепляющее описание')
    ->setPrice(1000)
    ->setVendor($vendor); // D&G явно в пролёте

$entityManager->persist($product1); // говорим ORM, что нужно будет поработать с этим объектом

// и ещё одну
$product2 = new Product;
$product2
    ->setName('Не менее крутая одёжка')
    ->setDescription('Ошеломляющее описание')
    ->setPrice(1000)
    ->setVendor($vendor); // тот же производитель

$entityManager->persist($product2); // говорим ORM, что нужно будет поработать с этим объектом

$entityManager->flush(); // сохраняем изменения



