<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MaxProperties
{
    public function maxProperties(int $value): static;
}
