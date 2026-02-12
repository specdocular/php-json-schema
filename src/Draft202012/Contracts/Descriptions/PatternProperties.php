<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\PatternProperties\PatternProperty;

interface PatternProperties
{
    public function patternProperties(PatternProperty ...$patternProperty): static;
}
