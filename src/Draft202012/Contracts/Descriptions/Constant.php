<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Constant
{
    public function const(mixed $value): static;
}
