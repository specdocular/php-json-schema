<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Enum
{
    public function enum(mixed ...$value): static;
}
