<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface UniqueItems
{
    public function uniqueItems(bool $value = true): static;
}
