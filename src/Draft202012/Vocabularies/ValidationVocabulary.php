<?php

namespace Specdocular\JsonSchema\Draft202012\Vocabularies;

use Specdocular\JsonSchema\Contracts\Vocabulary;
use Specdocular\JsonSchema\Draft202012\Keywords\Constant;
use Specdocular\JsonSchema\Draft202012\Keywords\DependentRequired\DependentRequired;
use Specdocular\JsonSchema\Draft202012\Keywords\Enum;
use Specdocular\JsonSchema\Draft202012\Keywords\ExclusiveMaximum;
use Specdocular\JsonSchema\Draft202012\Keywords\ExclusiveMinimum;
use Specdocular\JsonSchema\Draft202012\Keywords\MaxContains;
use Specdocular\JsonSchema\Draft202012\Keywords\Maximum;
use Specdocular\JsonSchema\Draft202012\Keywords\MaxItems;
use Specdocular\JsonSchema\Draft202012\Keywords\MaxLength;
use Specdocular\JsonSchema\Draft202012\Keywords\MaxProperties;
use Specdocular\JsonSchema\Draft202012\Keywords\MinContains;
use Specdocular\JsonSchema\Draft202012\Keywords\Minimum;
use Specdocular\JsonSchema\Draft202012\Keywords\MinItems;
use Specdocular\JsonSchema\Draft202012\Keywords\MinLength;
use Specdocular\JsonSchema\Draft202012\Keywords\MinProperties;
use Specdocular\JsonSchema\Draft202012\Keywords\MultipleOf;
use Specdocular\JsonSchema\Draft202012\Keywords\Pattern;
use Specdocular\JsonSchema\Draft202012\Keywords\Required;
use Specdocular\JsonSchema\Draft202012\Keywords\Type;
use Specdocular\JsonSchema\Draft202012\Keywords\UniqueItems;

/**
 * JSON Schema Draft 2020-12 Validation Vocabulary.
 *
 * @see https://json-schema.org/draft/2020-12/json-schema-validation#section-6
 */
final readonly class ValidationVocabulary implements Vocabulary
{
    public function id(): string
    {
        return 'https://json-schema.org/draft/2020-12/vocab/validation';
    }

    public function isRequired(): bool
    {
        return true;
    }

    public function keywords(): array
    {
        return [
            Type::class,
            MultipleOf::class,
            Maximum::class,
            ExclusiveMaximum::class,
            Minimum::class,
            ExclusiveMinimum::class,
            MaxLength::class,
            MinLength::class,
            Pattern::class,
            MaxItems::class,
            MinItems::class,
            UniqueItems::class,
            MaxContains::class,
            MinContains::class,
            MaxProperties::class,
            MinProperties::class,
            Required::class,
            DependentRequired::class,
            Constant::class,
            Enum::class,
        ];
    }
}
