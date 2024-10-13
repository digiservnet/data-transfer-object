<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Attributes\Strict;
use Digiservnet\DataTransferObject\DataTransferObject;

#[Strict]
class ComplexStrictDto extends DataTransferObject
{
    public string $name;

    public BasicDto $other;
}
