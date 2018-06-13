<?php

namespace Netleak;

//Suggestion: BasicInfo
final class ConfigParams {

	/** @var \Nette\DI\Container */
	private $context;

	public function __construct(\Nette\DI\Container $context = NULL) {
		$this->context = $context;
	}

	public function getDebugMode() {
		if (isset($this->context->parameters['debugMode'])) {
			return $this->context->parameters['debugMode'];
		}

		return false;
	}

	public function getProductionMode() {
		if (isset($this->context->parameters['productionMode'])) {
			return $this->context->parameters['productionMode'];
		}

		return false;
	}

	public function getConsoleMode() {
		if (isset($this->context->parameters['consoleMode'])) {
			return $this->context->parameters['consoleMode'];
		}

		return false;
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
