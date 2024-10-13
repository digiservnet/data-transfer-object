<?php

namespace Digiservnet\DataTransferObject\Tests\Casters;

use Exception;
use Digiservnet\DataTransferObject\Attributes\CastWith;
use Digiservnet\DataTransferObject\Caster;
use Digiservnet\DataTransferObject\DataTransferObject;
use Digiservnet\DataTransferObject\Tests\TestCase;

class ArrayCasterTest extends TestCase
{
    /** @test */
    public function test_collection_caster()
    {
        $bar = new Bar([
            'collectionOfFoo' => [
                ['name' => 'a'],
                ['name' => 'b'],
                ['name' => 'c'],
            ],
        ]);

        $this->assertCount(3, $bar->collectionOfFoo);
    }
}

class Bar extends DataTransferObject
{
    /** @var \Digiservnet\DataTransferObject\Tests\Foo[] */
    #[CastWith(FooArrayCaster::class)]
    public array $collectionOfFoo;
}

class Foo extends DataTransferObject
{
    public string $name;
}

class FooArrayCaster implements Caster
{
    public function cast(mixed $value): array
    {
        if (! is_array($value)) {
            throw new Exception("Can only cast arrays to Foo");
        }

        return array_map(
            fn (array $data) => new Foo(...$value),
            $value
        );
    }
}
