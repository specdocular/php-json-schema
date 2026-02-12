<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface MinContains
{
    public function minContains(int $value): static;
}
