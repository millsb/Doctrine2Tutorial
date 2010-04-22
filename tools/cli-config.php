<?php

require_once __DIR__ . '/../lib/Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Tutorial', __DIR__ . "/../lib");
$classLoader->register();


$config = new \Doctrine\ORM\Configuration();
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
//$driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__."/Entities"));
$driverImpl = new \Doctrine\ORM\Mapping\Driver\XmlDriver(array(__DIR__ . "/../lib/Tutorial/Entities/Mappings"));
$config->setMetadataDriverImpl($driverImpl);

$config->setProxyDir(__DIR__ . '/../Proxies');
$config->setProxyNamespace('Tutorial\Proxies');

$connectionOptions = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../db/database.sqlite'
);

$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);

$helperSet = new \Symfony\Components\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));