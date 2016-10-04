<?php

$_ENV = include __DIR__ . '/../../.env.template.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    price DECIMAL(4,2) NOT NULL,
    name VARCHAR(240) NOT NULL,
    description VARCHAR(500) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);