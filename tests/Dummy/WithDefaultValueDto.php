<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\DataTransferObject;

class WithDefaultValueDto extends DataTransferObject
{
    public string $name = 'John';
}
