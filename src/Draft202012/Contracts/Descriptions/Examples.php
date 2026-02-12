<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface Examples
{
    public function examples(mixed ...$example): static;
}
