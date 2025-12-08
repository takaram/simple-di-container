<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

class Controller
{
    public function __construct()
    {
    }

    public function index(): string
    {
        return "Hello, world!";
    }
}
