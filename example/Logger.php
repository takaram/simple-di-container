<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

class Logger implements LoggerInterface
{
    public function __construct()
    {
    }

    public function info(string $message): void
    {
        echo "[INFO] {$message}\n";
    }
}
