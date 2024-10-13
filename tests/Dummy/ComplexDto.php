<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\DataTransferObject;

class ComplexDto extends DataTransferObject
{
    public string $name;

    public BasicDto $other;
}
