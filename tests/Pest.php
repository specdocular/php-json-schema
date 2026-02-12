<?php

if (!function_exists('class_basename')) {
    function class_basename(string|object $class): string
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

expect()->extend('toBeImmutable', function (): void {
    $reflection = new ReflectionClass($this->value);

    expect($reflection->isReadOnly())->toBeTrue(
        'The class ' . $this->value . ' is not immutable.',
    );
});
