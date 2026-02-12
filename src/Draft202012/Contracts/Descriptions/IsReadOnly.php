<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface IsReadOnly
{
    public function readOnly(): static;
}
