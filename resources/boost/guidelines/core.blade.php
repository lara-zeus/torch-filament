## Lara Zeus Torch Filament (`lara-zeus/torch-filament`)

Filament Infolist entry (`TorchEntry`) for server-side syntax highlighting powered by `torchlight/engine` (no Node.js or external API required).

### Key Classes
- Infolist Entry: `LaraZeus\TorchFilament\Infolists\TorchEntry` (extends `Filament\Infolists\Components\Entry`, renders view `zeus-torch-filament::infolists.code`)
  - `->theme(array $theme)` (default: `['light' => 'github-light', 'dark' => 'github-dark']`)
  - `->grammar(string $grammar)` (default: `'php'`)
  - `->withGutter(bool $condition = true)` (default: `true`)
  - `->withWrapper(bool $condition = true)` (default: `false`)
- ServiceProvider: `LaraZeus\TorchFilament\TorchFilamentServiceProvider` (package name `zeus-torch-filament`)

### Rules & Pitfalls
- Not a panel plugin: use `LaraZeus\TorchFilament\Infolists\TorchEntry` directly inside Filament Infolists/Schemas.
- `TorchEntry` is read-only display (`Entry`); it is not a Form input/editor component.
- `theme()` expects an associative array (`['light' => ..., 'dark' => ...]`) compatible with `Torchlight\Engine\Engine::codeToHtml()` (default `'github-light'` / `'github-dark'`).
- Supports Torchlight annotations inside code strings (e.g. `// [tl! focus]`, `// [tl! ++]`, `// [tl! --]`).
