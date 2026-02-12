<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Required
{
    public function required(string ...$property): static;
}
