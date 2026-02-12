<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Description
{
    public function description(string $value): static;
}
