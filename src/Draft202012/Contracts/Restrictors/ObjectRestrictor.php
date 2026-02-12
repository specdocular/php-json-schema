<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Restrictors;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AdditionalProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DependentRequired;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Properties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Required;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictor;

interface ObjectRestrictor extends Restrictor, SharedRestrictor, AdditionalProperties, Properties, DependentRequired, MaxProperties, MinProperties, Required
{
}
