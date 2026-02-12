<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Id
{
    public function id(string $uri): static;
}
