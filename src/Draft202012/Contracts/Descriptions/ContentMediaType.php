<?php

namespace Specdocular\JsonSchema\Draft202012\Contracts\Descriptions;

interface ContentMediaType
{
    public function contentMediaType(string $mediaType): static;
}
