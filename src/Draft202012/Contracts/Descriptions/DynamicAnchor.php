<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface DynamicAnchor
{
    public function dynamicAnchor(string $value): static;
}
