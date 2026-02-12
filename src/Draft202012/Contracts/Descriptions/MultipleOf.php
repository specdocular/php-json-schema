<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MultipleOf
{
    public function multipleOf(float $value): static;
}
