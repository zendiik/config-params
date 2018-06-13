<?php

namespace Netleak\DI;

use Nette\DI\Compiler;
use Nette\DI\CompilerExtension;

final class ConfigParamsExtension extends CompilerExtension {

    public function loadConfiguration() {
        Compiler::loadDefinitions(
            $this->getContainerBuilder(),
            $this->loadFromFile(__DIR__.'/../config/services.neon')
        );
    }

}
