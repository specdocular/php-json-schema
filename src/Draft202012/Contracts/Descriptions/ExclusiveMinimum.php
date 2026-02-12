<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface ExclusiveMinimum
{
    public function exclusiveMinimum(float $value): static;
}
