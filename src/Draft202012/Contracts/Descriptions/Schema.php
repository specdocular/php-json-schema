<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Schema
{
    public function schema(string $uri): static;
}
