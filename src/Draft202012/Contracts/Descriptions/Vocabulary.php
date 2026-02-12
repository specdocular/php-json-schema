<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

use Specdocular\JsonSchema\Draft202012\Keywords\Vocabulary\Vocab;

interface Vocabulary
{
    public function vocabulary(Vocab ...$vocab): static;
}
