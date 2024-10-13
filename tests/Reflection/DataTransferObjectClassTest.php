<?php

namespace Digiservnet\DataTransferObject\Tests\Reflection;

use Digiservnet\DataTransferObject\DataTransferObject;
use Digiservnet\DataTransferObject\Reflection\DataTransferObjectClass;
use Digiservnet\DataTransferObject\Tests\TestCase;

class DataTransferObjectClassTest extends TestCase
{
    /** @test */
    public function test_public_properties()
    {
        $dto = new class () extends DataTransferObject {
            public $foo;

            public static $bar;

            private $baz;

            protected $boo;
        };

        $class = new DataTransferObjectClass($dto);

        $this->assertCount(1, $class->getProperties());
        $this->assertEquals('foo', $class->getProperties()[0]->name);
    }
}
