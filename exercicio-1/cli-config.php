<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Projeto\Sistema\Core\EntityManagerFactory;

require_once "vendor/autoload.php";

$entityManager = new EntityManagerFactory();
$entityManager = $entityManager->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
