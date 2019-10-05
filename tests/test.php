<?php 

require_once __DIR__ .'/../vendor/autoload.php'; // Autoload files using Composer autoload

use Application\Goodthoughts;

echo Goodthoughts::generateThought();