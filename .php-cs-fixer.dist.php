<?php

$finder = (new PhpCsFixer\Finder())
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true)
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'global_namespace_import' => [],
        'phpdoc_align' => ['align' => 'left'],
        'no_extra_blank_lines' => [],
    ])
    ->setFinder($finder)
;
