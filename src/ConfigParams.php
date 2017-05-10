<?php

namespace Pikl;

final class ConfigParams {

	/** @var \Nette\DI\Container */
	private $context;

	public function __construct(\Nette\DI\Container $context = NULL) {
		$this->context = $context;
	}

	public function getDebugMode() {
		return $this->context->parameters['debugMode'];
	}

	public function getProductionMode() {
		return $this->context->parameters['productionMode'];
	}

	public function getConsoleMode() {
		return $this->context->parameters['consoleMode'];
	}

}
