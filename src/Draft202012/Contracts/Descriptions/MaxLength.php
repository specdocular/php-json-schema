<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MaxLength
{
    public function maxLength(int $value): static;
}
