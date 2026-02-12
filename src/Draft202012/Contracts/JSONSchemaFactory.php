<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts;

interface JSONSchemaFactory
{
    public function build(): JSONSchema;
}
