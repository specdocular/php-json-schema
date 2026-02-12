<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Pattern
{
    public function pattern(string $value): static;
}
