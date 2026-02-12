<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Maximum
{
    public function maximum(float $value): static;
}
