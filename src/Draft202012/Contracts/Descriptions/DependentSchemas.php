<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\DependentSchemas\DependentSchema;

interface DependentSchemas
{
    public function dependentSchemas(DependentSchema ...$dependentSchema): static;
}
