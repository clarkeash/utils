<?php

namespace Tests\Unit;

use Clarkeash\Utils\MethodAtClassTrait;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MethodAtClassTraitTest extends TestCase
{
    /**
     * @test
     */
    public function it_will_return_a_string_with_the_full_class_path_at_method()
    {
        Assert::assertSame('Tests\Unit\Stub@example', Stub::method('example'));
        Assert::assertSame('Tests\Unit\SubStub@example', SubStub::method('example'));
    }
}

class Stub { use MethodAtClassTrait; }
class SubStub extends Stub { }
