<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Restrictors;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Format;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxLength;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinLength;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Pattern;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictor;

interface StringRestrictor extends Restrictor, SharedRestrictor, Format, MaxLength, MinLength, Pattern
{
}
