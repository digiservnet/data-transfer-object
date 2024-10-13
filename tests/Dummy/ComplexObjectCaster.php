<?php

namespace Digiservnet\DataTransferObject\Tests\Dummy;

use Digiservnet\DataTransferObject\Caster;

class ComplexObjectCaster implements Caster
{
    /**
     * @param array|mixed $value
     *
     * @return mixed
     */
    public function cast(mixed $value): ComplexObject
    {
        return new ComplexObject(
            name: $value['name']
        );
    }
}
