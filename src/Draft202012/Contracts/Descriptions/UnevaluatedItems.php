<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchema;

interface UnevaluatedItems
{
    public function unevaluatedItems(JSONSchema $descriptor): static;
}
