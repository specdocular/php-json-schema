# PHP JSON Schema

[![Latest Version on Packagist](https://img.shields.io/packagist/v/specdocular/php-json-schema.svg)](https://packagist.org/packages/specdocular/php-json-schema)
[![PHP Version](https://img.shields.io/packagist/php-v/specdocular/php-json-schema.svg)](https://packagist.org/packages/specdocular/php-json-schema)
[![Tests](https://github.com/specdocular/php-json-schema/actions/workflows/tests.yml/badge.svg)](https://github.com/specdocular/php-json-schema/actions/workflows/tests.yml)
[![codecov](https://codecov.io/gh/specdocular/php-json-schema/graph/badge.svg)](https://codecov.io/gh/specdocular/php-json-schema)
[![Code Style](https://github.com/specdocular/php-json-schema/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/specdocular/php-json-schema/actions/workflows/php-cs-fixer.yml)

A type-safe, fluent PHP implementation of [JSON Schema Draft 2020-12](https://json-schema.org/draft/2020-12/json-schema-core).

## Installation

```bash
composer require specdocular/php-json-schema
```

## Usage

Build JSON Schema definitions using a fluent, type-safe API:

```php
use Specdocular\JsonSchema\Draft202012\StrictFluentDescriptor;
use Specdocular\JsonSchema\Draft202012\Keywords\Properties\Property;

$schema = StrictFluentDescriptor::object()
    ->properties(
        Property::create('name', StrictFluentDescriptor::string()->minLength(1)),
        Property::create('email', StrictFluentDescriptor::string()->format('email')),
        Property::create('age', StrictFluentDescriptor::integer()->minimum(0)),
    )
    ->required('name', 'email');

// Compile to array
$compiled = $schema->compile();

// Or encode directly to JSON
$json = json_encode($schema, JSON_PRETTY_PRINT);
```

### Strict vs Loose Descriptors

- **`StrictFluentDescriptor`** (recommended) — provides type-specific method autocomplete. Methods like `minLength()` are only available on string schemas, `minimum()` only on numeric schemas, etc.
- **`LooseFluentDescriptor`** — exposes all keywords on every schema. Useful when building schemas with multiple types.

## Features

- Full JSON Schema Draft 2020-12 support (all 50 keywords, 7 vocabularies)
- Type-safe fluent API with IDE autocomplete
- Extensible keyword and vocabulary system
- Built-in schema validation (`VocabularyValidator`, `MetaSchemaValidator`)
- Framework-agnostic — no dependencies on Laravel or any framework

> **Note:** This library builds JSON Schema definitions. It does not validate data against schemas — use a validation library like `justinrainbow/json-schema` for that.

## Related Packages

| Package | Description |
|---------|-------------|
| [specdocular/php-openapi](https://github.com/specdocular/php-openapi) | Object-oriented OpenAPI 3.1.x builder (uses this package) |
| [specdocular/laravel-rules-to-schema](https://github.com/specdocular/laravel-rules-to-schema) | Convert Laravel validation rules to JSON Schema (uses this package) |
| [specdocular/laravel-openapi](https://github.com/specdocular/laravel-openapi) | Laravel integration for OpenAPI generation |

## License

MIT. See [LICENSE](LICENSE) for details.
