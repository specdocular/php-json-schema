<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchema;
use Specdocular\JsonSchema\Draft202012\Contracts\JSONSchemaFactory;

interface Items
{
    public function items(JSONSchema|JSONSchemaFactory $schema): static;
}
