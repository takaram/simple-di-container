<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

class Service
{
    public function __construct(
        private LoggerInterface $logger,
    )
    {
    }

    public function execute(): string
    {
        $this->logger->info('Service::execute が呼ばれました。');

        return "world";
    }
}
