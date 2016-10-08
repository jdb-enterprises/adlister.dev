<?php

$_ENV = include __DIR__ . '/../../env.template.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS user');

$query = 'CREATE TABLE user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    state CHAR(2) NOT NULL,
    zipcode CHAR(5) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,

    PRIMARY KEY (id)
)';

$dbc->exec($query);