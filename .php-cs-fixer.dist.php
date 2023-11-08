<?php

$finder = (new PhpCsFixer\Finder())
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true)
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        // exceptions
        'single_line_throw' => false,
        // php file
        'concat_space' => ['spacing' => 'one'],

        // namespace and imports
        'ordered_imports' => true,
        'global_namespace_import' => [],

        // standard functions and operators
        'native_constant_invocation' => false,
        'native_function_invocation' => false,
        'modernize_types_casting' => true,
        'is_null' => true,
        // arrays
        'array_syntax' => [
            'syntax' => 'short',
        ],
        // phpdoc
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_summary' => false,
        // logical operators
        'logical_operators' => true,
        // phpunit
        'php_unit_test_case_static_method_calls' => ['call_type' => 'this'],
    ])
    ->setFinder($finder)
;
