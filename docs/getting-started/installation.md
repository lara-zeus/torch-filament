---
title: Installation
weight: 3
---

## Installation

Install @zeus Torch Filament by running the following commands in your Laravel project directory.

```bash
composer require lara-zeus/torch-filament
```

## Usage

```php
TorchEntry::make('code')
    ->columnSpanFull()
    ->theme([
        'light'=>'everforest-light',
        'dark'=>'everforest-dark',
    ])
    //->withGutter(false)
    //->withWrapper(true)
    //->grammar('php')
    ->state(<<<'PHP'
        echo "Hello, world!";
        echo "Hello, world! I am focused"; // [tl! focus]
        echo "Hello, world! Added"; // [tl! ++]
        echo "Hello, world! Deleted"; // [tl! --]
    PHP),
```
