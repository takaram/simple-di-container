<?php
declare(strict_types=1);

use Takaram\SimpleDiContainer\Container;
use Takaram\SimpleDiContainerExample\Controller;
use Takaram\SimpleDiContainerExample\Logger;
use Takaram\SimpleDiContainerExample\LoggerInterface;

require_once __DIR__ . '/../vendor/autoload.php';

// LoggerInterfaceとLoggerを紐づけ
$container = new Container([
    LoggerInterface::class => Logger::class,
]);

// DIコンテナでControllerクラスをインスタンス化
$controller = $container->get(Controller::class);

echo $controller->index(), PHP_EOL;
