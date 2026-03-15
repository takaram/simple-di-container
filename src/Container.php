<?php
declare(strict_types=1);

namespace Takaram\SimpleDiContainer;

use ReflectionClass;

class Container
{
    public function __construct(private array $map = [])
    {
    }

    public function get(string $className): mixed
    {
        if (isset($this->map[$className])) {
            return $this->get($this->map[$className]);
        }

        $reflectionClass = new ReflectionClass($className);
        $constructor = $reflectionClass->getConstructor();

        $args = [];
        foreach ($constructor->getParameters() as $param) {
            $parameterClass = $param->getType()->getName();
            $args[] = $this->get($parameterClass);
        }

        return new $className(...$args);
    }
}
