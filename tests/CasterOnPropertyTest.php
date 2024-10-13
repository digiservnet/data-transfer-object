<?php

namespace Digiservnet\DataTransferObject\Tests;

use Digiservnet\DataTransferObject\Attributes\CastWith;
use Digiservnet\DataTransferObject\DataTransferObject;
use Digiservnet\DataTransferObject\Tests\Dummy\ComplexObject;
use Digiservnet\DataTransferObject\Tests\Dummy\ComplexObjectCaster;

class CasterOnPropertyTest extends TestCase
{
    /** @test */
    public function property_is_casted()
    {
        $dto = new class (complexObject: [ 'name' => 'test' ]) extends DataTransferObject {
            #[CastWith(ComplexObjectCaster::class)]
            public ComplexObject $complexObject;
        };

        $this->assertEquals('test', $dto->complexObject->name);
    }
}
