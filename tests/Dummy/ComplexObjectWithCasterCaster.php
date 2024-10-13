<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Caster;

class ComplexObjectWithCasterCaster implements Caster
{
    /**
     * @param array|mixed $value
     *
     * @return mixed
     */
    public function cast(mixed $value): ComplexObjectWithCaster
    {
        return new ComplexObjectWithCaster(
            name: $value['name']
        );
    }
}
