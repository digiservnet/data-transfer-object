<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\DataTransferObject;

class ComplexDtoWithCastedAttributeHavingCast extends DataTransferObject
{
    public string $name;

    public ComplexDtoWithCast $other;
}
