<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Attributes\DefaultCast;
use Digiservnet\DataTransferObject\DataTransferObject;

#[DefaultCast(ComplexObject::class, ComplexObjectCaster::class)]
class ComplexDtoWithCast extends DataTransferObject
{
    public string $name;

    public ComplexObject $object;
}
