<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchema;

interface UnevaluatedProperties
{
    public function unevaluatedProperties(JSONSchema $descriptor): static;
}
