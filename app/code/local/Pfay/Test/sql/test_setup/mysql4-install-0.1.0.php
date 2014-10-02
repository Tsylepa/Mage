<?php
$installer = $this;

$installer->startSetup();

$installer->run("

DROP TABLE IF EXISTS TABLE pfay_test;
CREATE TABLE pfay_test (
`id_pfay_test` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `nom` VARCHAR( 50 ) NOT NULL ,
 `prenom` VARCHAR( 50 ) NOT NULL ,
 `telephone` VARCHAR( 20 ) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

$installer->endSetup();
