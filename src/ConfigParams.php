<?php declare(strict_types = 1);

namespace Netleak;

//Suggestion: BasicInfo
final class ConfigParams {

	/** @var array<mixed> */
	protected array $parameters;

	/** @param array<mixed> $parameters */
	public function __construct(array $parameters) {
		$this->parameters = $parameters;
	}

	public function getDebugMode(bool $nette = false): bool {
		$debug = $nette ? $this->parameters['debugMode'] : $this->parameters['debug'];

		assert(is_bool($debug) || is_null($debug));

		return $debug ?? false;
	}

	public function getProductionMode(): bool {
		$productionMode = $this->parameters['productionMode'];
		assert(is_bool($productionMode) || is_null($productionMode));

		return $productionMode ?? false;
	}

	public function getConsoleMode(): bool {
		$consoleMode = $this->parameters['consoleMode'];
		assert(is_bool($consoleMode) || is_null($consoleMode));

		return $consoleMode ?? false;
	}

	/** @return array<mixed>|null */
	public function getParameters(): ?array {
		if (!empty($this->parameters)) {
			return $this->parameters;
		}

		return null;
	}

	/**
	 * @param string $parameter
	 * @return mixed|null
	 */
	public function getParameter(string $parameter) {
		$param = $this->parameters[$parameter];

		if (isset($param) || !empty($param)) {
			return $param;
		}

		return null;
	}

}
