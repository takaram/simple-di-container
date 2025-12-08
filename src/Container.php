<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainer;

class Container
{
    public function get(string $className): mixed
    {
        return new $className();
    }
}
