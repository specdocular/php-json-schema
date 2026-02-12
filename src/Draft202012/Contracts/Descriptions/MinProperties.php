<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MinProperties
{
    public function minProperties(int $value): static;
}
