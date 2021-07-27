<?php declare(strict_types = 1);

namespace Netleak;

use Nette\DI\Container;

//Suggestion: BasicInfo
final class ConfigParams {

	private Container $context;

	public function __construct(Container $context) {
		$this->context = $context;
	}

	public function getDebugMode(): bool {
		if (isset($this->context->parameters['debugMode'])) {
			return $this->context->parameters['debugMode'];
		}

		return false;
	}

	public function getProductionMode(): bool {
		if (isset($this->context->parameters['productionMode'])) {
			return $this->context->parameters['productionMode'];
		}

		return false;
	}

	public function getConsoleMode(): bool {
		if (isset($this->context->parameters['consoleMode'])) {
			return $this->context->parameters['consoleMode'];
		}

		return false;
	}

	/** @return array<mixed>|null */
	public function getParameters(): ?array {
		if (!empty($this->context->getParameters())) {
			return $this->context->getParameters();
		}

		return null;
	}

	/**
	 * @param string $parameter
	 * @return mixed|null
	 */
	public function getParameter(string $parameter) {
		$param = $this->context->getParameters()[$parameter];

		if (isset($param) || !empty($param)) {
			return $param;
		}

		return null;
	}

	/*
	 * TODO
	 *
	 * /lze zajistit aby promenne byli pak primo i v sablonach a je to prakticke? co to obnasi?
	 *
	 * getEnvironment()
	 * getDevice()
	 * getBrowserLanguage()
	 * getProtocol()
	 * setCustom(array()) and getCustom(array()) - array with optional basic variables
	 * setMetadata and getMetadata // arrays /
	 * setMetaData() {
	 *  this->presenter->template->$variable =
	 * return array(} ... etc
	 */

}
