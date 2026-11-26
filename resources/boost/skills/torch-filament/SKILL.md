---
name: zeus-torch-filament
description: Highlight code blocks with Torchlight Engine inside Filament infolists using lara-zeus/torch-filament.
---

# Lara Zeus Torch Filament (`lara-zeus/torch-filament`)

## Overview & Requirements
- **Package**: `lara-zeus/torch-filament` (Free / MIT)
- **Requirements**: PHP `^8.1`, `filament/filament` `^5.0`, `spatie/laravel-package-tools` `^1.16`, `torchlight/engine` `^0.1.0`
- **Features**: Server-side syntax highlighting via `Torchlight\Engine\Engine` (no Node or API key needed), light/dark dual themes, gutter/line numbers, optional wrapper, and Torchlight annotations (`[tl! focus]`, `[tl! ++]`, `[tl! --]`, collapsible blocks).

## Installation
```bash
composer require lara-zeus/torch-filament
```
No migrations, config files, or panel plugin registration needed.

## Filament Panel Registration
Not a panel plugin; use `TorchEntry` directly in any Filament Infolist or Schema.

## Core Usage & Examples
```php
use LaraZeus\TorchFilament\Infolists\TorchEntry;

TorchEntry::make('code')
    ->columnSpanFull()
    ->theme([
        'light' => 'everforest-light',
        'dark' => 'everforest-dark',
    ])
    ->withGutter(true)    // default: true
    ->withWrapper(false)  // default: false
    ->grammar('php')      // default: 'php'
    ->state(<<<'PHP'
        echo "Hello, world!";
        echo "Hello, world! I am focused"; // [tl! focus]
        echo "Hello, world! Added"; // [tl! ++]
        echo "Hello, world! Deleted"; // [tl! --]
    PHP);
```
You can also bind `TorchEntry::make('snippet')` directly to a model attribute containing raw source code instead of `->state(...)`.

## Common Pitfalls & Anti-Patterns
- **`theme()` expects an array**: Do not pass a single string to `->theme()`; `TorchEntry::theme(array $theme)` expects light/dark keys such as `['light' => 'github-light', 'dark' => 'github-dark']`.
- **Infolist only**: `TorchEntry` extends `Filament\Infolists\Components\Entry` and is for displaying highlighted code, not editing it in forms.
