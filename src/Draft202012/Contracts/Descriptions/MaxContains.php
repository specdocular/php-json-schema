<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MaxContains
{
    public function maxContains(int $value): static;
}
