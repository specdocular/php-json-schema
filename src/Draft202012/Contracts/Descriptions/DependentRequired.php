<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\DependentRequired\Dependency;

interface DependentRequired
{
    public function dependentRequired(Dependency ...$dependency): static;
}
