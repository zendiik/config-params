# config-params
Getters to find out in which modes are the Nette application.

# Installation
```
composer require netleak/config-params
```

# Implementation in config.neon
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
