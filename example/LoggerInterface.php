<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

interface LoggerInterface
{
    public function info(string $message): void;
}
