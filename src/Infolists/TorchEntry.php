<?php

namespace LaraZeus\TorchFilament\Infolists;

use Filament\Infolists\Components\Component;

class TorchEntry extends Component
{
    protected string $view = 'zeus-torch-filament::infolists.code';

    protected array $theme = [
        'light' => 'github-light',
        'dark' => 'github-dark',
    ];

    protected string $grammar = 'php';

    protected bool $gutter = true;

    protected bool $wrapper = false;

    public static function make(?string $label = null): static
    {
        $static = app(static::class, ['label' => $label]);
        $static->configure();

        return $static;
    }

    public function theme(array $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTheme(): array
    {
        return $this->theme;
    }

    public function withGutter(bool $condition = true): static
    {
        $this->gutter = $condition;

        return $this;
    }

    public function isWithGutter(): bool
    {
        return $this->gutter;
    }

    public function withWrapper(bool $condition = true): static
    {
        $this->wrapper = $condition;

        return $this;
    }

    public function isWithWrapper(): bool
    {
        return $this->wrapper;
    }

    public function grammar(string $grammar): static
    {
        $this->grammar = $grammar;

        return $this;
    }

    public function getGrammar(): string
    {
        return $this->grammar;
    }
}
