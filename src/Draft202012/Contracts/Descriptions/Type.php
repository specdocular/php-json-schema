<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Type
{
    public function type(string ...$type): static;
}
