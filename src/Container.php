<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainer;

use ReflectionClass;

class Container
{
    public function get(string $className): mixed
    {
        $reflectionClass = new ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();

        $args = [];
        foreach ($constructor->getParameters() as $param) {
            $parameterClass = $param->getType()->getName();
            $args[] = new $parameterClass();
        }

        return new $className(...$args);
    }
}
