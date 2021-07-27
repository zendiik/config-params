# Config params

[![Build](https://gitlab.zendovo.eu/netleak/config-params/badges/master/pipeline.svg)](https://gitlab.zendovo.eu/netleak/config-params/pipelines)
[![Latest Stable Version](https://poser.pugx.org/netleak/config-params/v/stable)](https://packagist.org/packages/netleak/config-params)
[![License](https://poser.pugx.org/netleak/config-params/license)](https://packagist.org/packages/netleak/config-params)

Getters to find out in which modes are the Nette application.

# Installation
```shell
composer require netleak/config-params
```

Write this to config.neon
```neon
extensions:
    - Netleak\DI\ConfigParamsExtension
```
    
# Usage
```php
use Netleak\ConfigParams;

class BasePresenter extends Nette\Application\UI\Presenter {

	public ConfigParams $configParams;
	
	public function injectConfigParams(ConfigParams $configParams): void {
        	$this->configParams = $configParams;
    	}

	function startup() {
		parent::startup();
		$this->getTemplate()->setParameters(array('debugMode' => $this->configParams->getDebugMode()));
	}

}
```
