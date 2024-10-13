<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Attributes\CastWith;

#[CastWith(ComplexObjectWithCasterCaster::class)]
class ComplexObjectWithCaster
{
    public function __construct(
        public string $name,
    ) {
    }
}
