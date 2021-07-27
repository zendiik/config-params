# Config params

[![Build](https://gitlab.zendovo.eu/netleak/config-params/badges/master/pipeline.svg)](https://gitlab.zendovo.eu/netleak/config-params/pipelines)
[![Latest Stable Version](https://poser.pugx.org/netleak/config-params/v/stable)](https://packagist.org/packages/netleak/config-params)
[![License](https://poser.pugx.org/netleak/config-params/license)](https://packagist.org/packages/netleak/config-params)

Getters to find out in which modes are the Nette application.

# Installation
```
composer require netleak/config-params
```

Write this to config.neon
```
extensions:
    - Netleak\DI\ConfigParamsExtension
```
    
# Usage
```
use Netleak\ConfigParams;

class BasePresenter extends Nette\Application\UI\Presenter {

	/** @var Netleak\ConfigParams */
	public $configParams;
	
	public function injectConfigParams(ConfigParams $configParams) {
        	$this->configParams = $configParams;
    	}

	function startup() {
		parent::startup();
		$this->template->debugMode = $this->configParams->getDebugMode();
	}

}
```
