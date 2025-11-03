<?php

return new PhpCsFixer\Config()
    ->setCacheFile('.cache/php-cs-fixer/.php-cs-fixer.cache')
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->files()
            ->ignoreDotFiles(true)
            ->ignoreVCS(true)
            ->in([
                __DIR__ . '/src',
                __DIR__ . '/tests',
            ])
            ->name('*.php')
    )
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_before_statement' => [
            'statements' => ['continue', 'declare', 'return', 'throw', 'try'],
        ],
        'cast_spaces' => ['space' => 'single'],
        'class_attributes_separation' => [
            'elements' => ['method' => 'one', 'trait_import' => 'none']],
        'declare_strict_types' => true,
        'include' => true,
        'native_function_invocation' => [
            'scope' => 'namespaced',
            'include' => ['@all'],
        ],
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_trailing_comma_in_singleline' => true,
        'no_unused_imports' => true,
        'phpdoc_align' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'psr_autoloading' => ['dir' => 'src'],
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline' => true,
    ])
    ->setUsingCache(true);
