<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Restrictors;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ExclusiveMaximum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ExclusiveMinimum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Format;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Maximum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Minimum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MultipleOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictor;

interface NumeralRestrictor extends Restrictor, SharedRestrictor, ExclusiveMaximum, ExclusiveMinimum, Maximum, Minimum, MultipleOf, Format
{
}
