<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Minimum
{
    public function minimum(float $value): static;
}
