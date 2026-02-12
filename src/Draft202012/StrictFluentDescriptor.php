<?php

namespace Specdocular\JsonSchema\Draft202012;

use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\ArrayRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\BooleanRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\ConstantRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\EnumRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\IntegerRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\NullRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\NumberRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\ObjectRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\RefRestrictor;
use Specdocular\JsonSchema\Draft202012\Contracts\Restrictors\StringRestrictor;
use Specdocular\JsonSchema\Draft202012\Keywords\Type;

class StrictFluentDescriptor extends LooseFluentDescriptor implements RefRestrictor, NullRestrictor, BooleanRestrictor, StringRestrictor, IntegerRestrictor, NumberRestrictor, ObjectRestrictor, ArrayRestrictor, ConstantRestrictor, EnumRestrictor
{
    public static function null(): NullRestrictor
    {
        return parent::withoutSchema()->type(Type::null());
    }

    public static function boolean(): BooleanRestrictor
    {
        return parent::withoutSchema()->type(Type::boolean());
    }

    public static function string(): StringRestrictor
    {
        return parent::withoutSchema()->type(Type::string());
    }

    public static function integer(): IntegerRestrictor
    {
        return parent::withoutSchema()->type(Type::integer());
    }

    public static function number(): NumberRestrictor
    {
        return parent::withoutSchema()->type(Type::number());
    }

    public static function object(): ObjectRestrictor
    {
        return parent::withoutSchema()->type(Type::object());
    }

    public static function array(): ArrayRestrictor
    {
        return parent::withoutSchema()->type(Type::array());
    }

    public static function constant(mixed $value): ConstantRestrictor
    {
        return parent::withoutSchema()->const($value);
    }

    public static function enumerator(mixed ...$value): EnumRestrictor
    {
        return parent::withoutSchema()->enum(...$value);
    }
}
