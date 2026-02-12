<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Comment
{
    public function comment(string $value): static;
}
