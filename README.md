# config-params
Gettery pro zjištění v jakých módech je nette aplikace.

# instalace
Do extensions v config.neon přidat: **- Pikl\DI\ConfigParamsExtension**
    
# použití
**use Pikl\ConfigParams;**
```
class BasePresenter extends Nette\Application\UI\Presenter {

	/** @var Pikl\ConfigParams\ConfigParams */
	public $configParams;
	
	public function __construct(ConfigParams $configParams) {
		...
		$this->configParams = $configParams;
	}

	function startup() {
		parent::startup();

    ...
		$this->template->debugMode = $this->configParams->getDebugMode();
	}

}
```
