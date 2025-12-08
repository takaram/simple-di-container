<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainerExample;

class Controller
{
    public function __construct(
        private Service $service,
        private Logger $logger,
    )
    {
    }

    public function index(): string
    {
        $this->logger->info('Controller::index が呼ばれました。');

        $name = $this->service->execute();
        return "Hello, {$name}!";
    }
}
