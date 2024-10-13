<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\DataTransferObject;

class ComplexDtoWithSelf extends DataTransferObject
{
    public string $name;

    public ?self $other;
}
