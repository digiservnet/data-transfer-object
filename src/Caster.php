<?php

namespace Digiservnet\DataTransferObject;

interface Caster
{
    public function cast(mixed $value): mixed;
}
