<?php

namespace Minicli;

class CliPrinter
{
    public function out($message)
    {
        echo $message;
    }

    public function newline()
    {
        $this->out("\n");
    }

    public function display($message)
    {
        $this->newline();
        $this->out($message);
        $this->newline();
        $this->newline();
    }

    // public function handle()
    // {
    //     $this->getPrinter()->info("Starting Minicli...");
    //     if (!$this->hasParam('message')) {
    //         $this->getPrinter()->error("Error: you must provide a message.");
    //         exit;
    //     }

    //     $this->getPrinter()->success($this->getParam('message'));
    // }
}
