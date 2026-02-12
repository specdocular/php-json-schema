<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchema;
use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchemaFactory;

interface PrefixItems
{
    public function prefixItems(JSONSchema|JSONSchemaFactory ...$schema): static;
}
