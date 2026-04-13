# Drps Coding Standard

## Installation

```shell
composer require --dev drps/code-standard
```

## Usage with PHP CS Fixer

Update your `.php-cs-fixer.dist.php`:

```php
<?php

use Drps\CodeStandard\FixerConfig;

$finder = PhpCsFixer\Finder::create()->in(__DIR__.'/src');
$config = (new PhpCsFixer\Config())->setFinder($finder);

(new FixerConfig())->to($config, [/* custom rules here */]);

return $config;
```
