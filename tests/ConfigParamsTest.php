<?php declare(strict_types = 1);

use Netleak\ConfigParams;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ConfigParams::class)]
final class ConfigParamsTest extends TestCase {

	public function testGetDebugMode(): void {
		$config = new ConfigParams(['debugMode' => true]);
		$this->assertTrue($config->getDebugMode(true));

		$config = new ConfigParams(['debug' => false]);
		$this->assertFalse($config->getDebugMode());

		$config = new ConfigParams(['debugMode' => null]);
		$this->assertFalse($config->getDebugMode(true));

		$config = new ConfigParams([]);
		$this->assertFalse($config->getDebugMode());
	}

	public function testGetProductionMode(): void {
		$config = new ConfigParams(['productionMode' => true]);
		$this->assertTrue($config->getProductionMode());

		$config = new ConfigParams(['productionMode' => false]);
		$this->assertFalse($config->getProductionMode());

		$config = new ConfigParams(['productionMode' => null]);
		$this->assertFalse($config->getProductionMode());

		$config = new ConfigParams([]);
		$this->assertFalse($config->getProductionMode());
	}

	public function testGetConsoleMode(): void {
		$config = new ConfigParams(['consoleMode' => true]);
		$this->assertTrue($config->getConsoleMode());

		$config = new ConfigParams(['consoleMode' => false]);
		$this->assertFalse($config->getConsoleMode());

		$config = new ConfigParams(['consoleMode' => null]);
		$this->assertFalse($config->getConsoleMode());

		$config = new ConfigParams([]);
		$this->assertFalse($config->getConsoleMode());
	}

	public function testGetParameters(): void {
		$config = new ConfigParams(['param1' => 'value1', 'param2' => 'value2']);
		$this->assertEquals(['param1' => 'value1', 'param2' => 'value2'], $config->getParameters());

		$config = new ConfigParams([]);
		$this->assertNull($config->getParameters());
	}

	public function testGetParameter(): void {
		$config = new ConfigParams(['param1' => 'value1', 'param2' => 'value2']);
		$this->assertEquals('value1', $config->getParameter('param1'));
		$this->assertEquals('value2', $config->getParameter('param2'));

		$config = new ConfigParams([]);
		$this->assertNull($config->getParameter('param1'));
	}

}
