<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface IsWriteOnly
{
    public function writeOnly(): static;
}
