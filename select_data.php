<?php

use Doctrine\ORM\EntityManager;
use Verstak\Entity\Product;

require_once __DIR__ . '/bootstrap.php';

/** @var EntityManager $entityManager */
$entityManager; // эта переменная объявлена в bootstrap.php

/** @var Product $product */
$product = $entityManager->find(Product::class, 1); // говорим ORM, что мы хотим найти продукт по идентификатору "1"

echo $product->getName() . "\n";
echo $product->getVendor()->getName() . "\n";


// сложный пример

/** @var Product[] $products */
$products = $entityManager
    ->getRepository(Product::class)
    ->findBy(['vendor' => $product->getVendor()]); // говорим ORM, что мы хотим найти продукты по вендору из предыдущего примера

foreach ($products as $product) {
    echo $product->getName() . "\n";
}