<?php

namespace Pikl\DI;

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
