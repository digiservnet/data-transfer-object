<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\DataTransferObject;

class ComplexDtoWithNullableProperty extends DataTransferObject
{
    public string $name;

    public ?BasicDto $other;
}
