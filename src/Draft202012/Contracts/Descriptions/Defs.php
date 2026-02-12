<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\Defs\Def;

interface Defs
{
    public function defs(Def ...$def): static;
}
