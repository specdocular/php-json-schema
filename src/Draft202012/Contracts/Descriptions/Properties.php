<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\Properties\Property;

interface Properties
{
    public function properties(Property ...$property): static;
}
