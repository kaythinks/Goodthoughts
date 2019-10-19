# This package was designed to boost developers morale while coding.

# A good thought is generated each time the static method generateThought() is called.

-- Run composer require kaythinks/goodthoughts

-- Run composer dump-autoload

-- The library can be used this way for example;

    <?php

	require_once 'vendor/autoload.php';

	use Kaythinks\Goodthoughts;

	echo Goodthoughts::generateThought();
