<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use PHPUnit\Framework\TestCase;
use Kaythinks\Goodthoughts;

class ExampleTest extends TestCase
{
	public function testgenerateThought()
	{
		$data = Goodthoughts::generateThought();
		$this->assertStringEndsWith('!', $data);
	}
}