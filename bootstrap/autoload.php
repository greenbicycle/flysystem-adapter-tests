<?php

/**
 * Import autoloader.
 */
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

/**
 * Create filesystem variable
 */
require_once __DIR__ . '/../bootstrap/filesystem.php';
