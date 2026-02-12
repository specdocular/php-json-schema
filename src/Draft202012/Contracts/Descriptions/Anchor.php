<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Anchor
{
    public function anchor(string $value): static;
}
