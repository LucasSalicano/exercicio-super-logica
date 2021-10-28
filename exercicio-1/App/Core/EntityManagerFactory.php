<?php

namespace App\Core;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    private static $instance;

    private function configEntityManager(): EntityManagerInterface
    {
        //Singleton
        if (self::$instance === null) {
            $path = [__DIR__ . '\..\Entity'];
            $isDevMode = true;

            // Em Sqlite para facilitar a reprodução do projeto
            $dbParams = array(
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '\Data\db.sqlite'
            );

            $config = Setup::CreateAnnotationMetadataConfiguration(
                $path, $isDevMode
            );

            self::$instance = EntityManager::create($dbParams, $config);
        }
        return self::$instance;
    }

    public function getEntityManager()
    {
        date_default_timezone_set('brazil/East');
        return $this->configEntityManager();
    }
}