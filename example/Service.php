<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

class Service
{
    public function __construct()
    {
    }

    public function execute(): string
    {
        return "world";
    }
}
