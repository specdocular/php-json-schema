<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface DynamicRef
{
    public function dynamicRef(string $uri): static;
}
