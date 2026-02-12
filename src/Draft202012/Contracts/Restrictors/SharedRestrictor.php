<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Restrictors;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AllOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Anchor;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AnyOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Comment;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DefaultValue;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Defs;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Deprecated;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Description;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DynamicAnchor;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DynamicRef;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Examples;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Id;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\IsReadOnly;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\IsWriteOnly;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\OneOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Schema;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Title;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Vocabulary;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictor;

interface SharedRestrictor extends Restrictor, Anchor, Comment, Defs, DynamicAnchor, DynamicRef, Id, Schema, Vocabulary, AllOf, AnyOf, OneOf, DefaultValue, Deprecated, Description, Examples, IsReadOnly, IsWriteOnly, Title
{
}
