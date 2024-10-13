<?php

namespace Digiservnet\DataTransferObject\Tests\CollectionCaster;

use Illuminate\Support\Collection;
use Digiservnet\DataTransferObject\Attributes\CastWith;
use Digiservnet\DataTransferObject\Caster;
use Digiservnet\DataTransferObject\DataTransferObject;
use Digiservnet\DataTransferObject\Tests\TestCase;

class CollectionCasterTest extends TestCase
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
        $this->assertInstanceOf(Foo::class, $bar->collectionOfFoo[0]);
    }
}

class Bar extends DataTransferObject
{
    #[CastWith(FooCollectionCaster::class)]
    public CollectionOfFoo $collectionOfFoo;
}

class Foo extends DataTransferObject
{
    public string $name;
}

class CollectionOfFoo extends Collection
{
    public function offsetGet($key): Foo
    {
        return parent::offsetGet($key);
    }
}

class FooCollectionCaster implements Caster
{
    public function cast(mixed $value): CollectionOfFoo
    {
        return new CollectionOfFoo(array_map(
            fn (array $data) => new Foo(...$data),
            $value
        ));
    }
}
