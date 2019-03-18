<?php declare(strict_types=1);

namespace Comquer\ReflectionTest;

use Comquer\Reflection\ClassNamespace;
use Comquer\ReflectionTest\Fixture\SampleClass;
use PHPUnit\Framework\TestCase;

class ClassNamespaceTest extends TestCase
{
    /** @test */
    function instantiate_with_valid_class_namespace()
    {
        self::assertInstanceOf(
            ClassNamespace::class,
            new ClassNamespace(SampleClass::class)
        );
    }
}