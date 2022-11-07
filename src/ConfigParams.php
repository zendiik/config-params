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
		if ($nette) {
			return $this->parameters['debugMode'];
		}

		return $this->parameters['debug'] ?? false;
	}

	public function getProductionMode(): bool {
		return $this->parameters['productionMode'] ?? false;
	}

	public function getConsoleMode(): bool {
		return $this->parameters['consoleMode'] ?? false;
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
