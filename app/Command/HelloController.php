<?php

namespace App\Command;

use Minicli\CommandController;

class HelloController extends CommandController
{
    public function handle()
    {
        $name = $this->hasParam('user') ? $this->getParam('user') : 'World';

        $this->getPrinter()->display(sprintf("Hello, %s!", $name));
    }
}
