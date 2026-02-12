<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface DefaultValue
{
    public function default(mixed $value): static;
}
