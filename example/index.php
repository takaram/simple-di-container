<?php
declare(strict_types=1);

use Takaram\SimpleDiContainer\Container;
use Takaram\SimpleDiContainerExample\Controller;

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Container();

// DIコンテナでControllerクラスをインスタンス化
$controller = $container->get(Controller::class);

echo $controller->index(), PHP_EOL;
