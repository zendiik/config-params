<?php declare(strict_types = 1);

namespace Netleak;

//Suggestion: BasicInfo
use Netleak\Exception\ParameterNotFoundException;

final class ConfigParams {

	/** @var array<mixed> */
	protected array $parameters;

	/** @param array<mixed> $parameters */
	public function __construct(array $parameters) {
		$this->parameters = $parameters;
	}

	public function getDebugMode(bool $nette = false): bool {
		if ($nette) {
			$debug = array_key_exists('debugMode', $this->parameters) ? $this->parameters['debugMode'] : false;
		} else {
			$debug = array_key_exists('debug', $this->parameters) ? $this->parameters['debug'] : false;
		}

		assert(is_bool($debug) || is_null($debug));

		return $debug ?? false;
	}

	public function getProductionMode(): bool {
		$productionMode = $this->parameters['productionMode'] ?? null;
		assert(is_bool($productionMode) || is_null($productionMode));

		return $productionMode ?? false;
	}

	public function getConsoleMode(): bool {
		$consoleMode = $this->parameters['consoleMode'] ?? null;
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

	public function getParameter(string $parameter, bool $throws = true): mixed {
		$params = $this->parameters;
		assert(is_array($params));

		foreach (explode('.', $parameter) as $key) {
			if (!array_key_exists($key, $params)) {
				if ($throws) {
					throw new ParameterNotFoundException(sprintf('Parameter "%s" not found.', $parameter));
				}

				return null;
			}

			$params = $params[$key];
		}

		return $params;
	}

}
