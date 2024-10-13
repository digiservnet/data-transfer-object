<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Caster;

class RoundingCaster implements Caster
{
    public function cast(mixed $value): float | int
    {
        return is_int($value) ? $value : round($value, 2);
    }
}
