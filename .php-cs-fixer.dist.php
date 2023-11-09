<?php

$finder = (new PhpCsFixer\Finder())
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true)
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        '@Symfony'=> true,
        '@Symfony:risky' => true,
        'global_namespace_import' => [],

        // exceptions
        'single_line_throw' => false,

        // php file
        'concat_space' => ['spacing' => 'one'],

        // namespace and imports
        'ordered_imports' => true,

        // standard functions and operators
        'native_constant_invocation' => false,
        'native_function_invocation' => false,
        'modernize_types_casting' => true,
        'is_null' => true,

        // arrays
        'array_syntax' => [
            'syntax' => 'short',
        ],

        // Use null coalescing operator ?? where possible
        'ternary_to_null_coalescing' => true,
        'list_syntax' => ['syntax' => 'short'],

        // functions, methods
        'void_return' => true,

        // phpdoc
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_summary' => false,

        // logical operators
        'logical_operators' => true,

        // phpunit
        'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],

        // semicolon
        // move the semicolon to the new line for chained calls
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
    ])
    ->setFinder($finder)
;
