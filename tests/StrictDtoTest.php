<?php

namespace Digiservnet\DataTransferObject\Tests;

use Digiservnet\DataTransferObject\Attributes\Strict;
use Digiservnet\DataTransferObject\DataTransferObject;
use Digiservnet\DataTransferObject\Exceptions\UnknownProperties;

class StrictDtoTest extends TestCase
{
    /** @test */
    public function non_strict_test()
    {
        $dto = new NonStrictDto(
            name: 'name',
            unknown: 'unknown'
        );

        $this->markTestSucceeded();
    }

    /** @test */
    public function strict_test()
    {
        $this->expectException(UnknownProperties::class);

        $dto = new StrictDto(
            name:    'name',
            unknown: 'unknown'
        );
    }

    /** @test */
    public function strict_child_test()
    {
        $this->expectException(UnknownProperties::class);

        $dto = new ChildStrictDto(
            name: 'name',
            unknown: 'unknown'
        );
    }
}

#[Strict]
class StrictDto extends DataTransferObject
{
    public string $name;
}

final class ChildStrictDto extends StrictDto
{
}


class NonStrictDto extends DataTransferObject
{
    public string $name;
}
