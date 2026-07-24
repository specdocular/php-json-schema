# Changelog

All notable changes to PHP JSON Schema are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1.0] - 2026-02-12

Initial release — a type-safe, fluent PHP implementation of JSON Schema Draft 2020-12.

### Added

- Full JSON Schema Draft 2020-12 support (all 50 keywords, 7 vocabularies).
- Type-safe fluent API with IDE autocomplete (`StrictFluentDescriptor`) and an
  all-keyword variant (`LooseFluentDescriptor`).
- Extensible keyword and vocabulary system.
- Built-in schema validation (`VocabularyValidator`, `MetaSchemaValidator`).
- Framework-agnostic design with no dependency on Laravel or any framework.

[Unreleased]: https://github.com/specdocular/php-json-schema/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/specdocular/php-json-schema/releases/tag/v0.1.0
