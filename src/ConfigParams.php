<?php

namespace Pikl;

final class ConfigParams {

	/** @var \Nette\DI\Container */
	private $context;

	public function __construct(\Nette\DI\Container $context = NULL) {
		$this->context = $context;
	}

	public function getDebugMode() {
		if (isset($this->context->parameters['debugMode'])) {
			return $this->context->parameters['debugMode'];
		} else {
			return false;
		}
	}

	public function getProductionMode() {
		if (isset($this->context->parameters['productionMode'])) {
			return $this->context->parameters['productionMode'];
		} else {
			return false;
		}
	}

	public function getConsoleMode() {
		if (isset($this->context->parameters['consoleMode'])) {
			return $this->context->parameters['consoleMode'];
		} else {
			return false;
		}
	}

}
