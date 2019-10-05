# This package was designed to assist developers.

# A good thought is generated each time the static method generateThought() is called.

-- Run composer require kaythinks/goodthoughts

-- Run composer dump-autoload

-- The library can be used this way for example;
	require_once 'vendor/autoload.php';

	use Kaythinks\Goodthoughts;

	echo Goodthoughts::generateThought();
