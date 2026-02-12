<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Restrictors;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Items;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxContains;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinContains;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\UniqueItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictor;

interface ArrayRestrictor extends Restrictor, SharedRestrictor, MaxContains, MinContains, UniqueItems, MaxItems, MinItems, Items
{
}
