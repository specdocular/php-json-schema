<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchema;

interface AdditionalProperties
{
    public function additionalProperties(JSONSchema|bool $schema): static;
}
