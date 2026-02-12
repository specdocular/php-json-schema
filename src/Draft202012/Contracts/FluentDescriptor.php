<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts;

use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AdditionalProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AllOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Anchor;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\AnyOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Comment;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Constant;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Contains;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ContentEncoding;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ContentMediaType;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ContentSchema;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DefaultValue;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Defs;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DependentRequired;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DependentSchemas;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Deprecated;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Description;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DynamicAnchor;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\DynamicRef;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Enum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Examples;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ExclusiveMaximum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\ExclusiveMinimum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Format;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Id;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\IsReadOnly;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\IsWriteOnly;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Items;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxContains;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Maximum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxLength;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MaxProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinContains;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Minimum;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinLength;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MinProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\MultipleOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\OneOf;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Pattern;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\PatternProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\PrefixItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Properties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\PropertyNames;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Ref;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Required;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Schema;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Title;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Type;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\UnevaluatedItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\UnevaluatedProperties;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\UniqueItems;
use Specdocular\JsonSchema\Draft202012\Contracts\Descriptions\Vocabulary;

interface FluentDescriptor extends JSONSchema, Compilable, \JsonSerializable,
    // Core vocabulary
    Anchor, Comment, Defs, DynamicAnchor, DynamicRef, Id, Ref, Schema, Vocabulary,
    // Applicator vocabulary
    AllOf, AnyOf, OneOf, PrefixItems, Items, Contains, Properties, PatternProperties, AdditionalProperties, PropertyNames, DependentSchemas,
    // Unevaluated vocabulary
    UnevaluatedItems, UnevaluatedProperties,
    // Validation vocabulary
    Type, Constant, Enum, MaxLength, MinLength, Pattern, Maximum, ExclusiveMaximum, Minimum, ExclusiveMinimum, MultipleOf, MaxItems, MinItems, UniqueItems, MaxContains, MinContains, MaxProperties, MinProperties, Required, DependentRequired,
    // Meta-data vocabulary
    Title, Description, DefaultValue, Deprecated, IsReadOnly, IsWriteOnly, Examples,
    // Format vocabulary
    Format,
    // Content vocabulary
    ContentEncoding, ContentMediaType, ContentSchema
{
}
