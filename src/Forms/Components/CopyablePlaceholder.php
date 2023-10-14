<?php

namespace AxonC\FilamentCopyablePlaceholder\Forms\Components;

use Closure;
use Filament\Forms\Components\Placeholder;

class CopyablePlaceholder extends Placeholder
{
    protected string $view = 'filament-copyable-placeholder::forms.components.copyable-placeholder';

    protected string|Closure|null $icon = 'heroicon-o-clipboard-document';

    protected string|Closure|null $iconColor = 'primary';

    protected string|Closure|null $buttonText = 'Copy';

    protected bool|Closure|null $iconOnly = false;

    protected function setUp(): void
    {
        parent::setUp();

        if ($this->getIconOnly()) {
            $this->extraAttributes([
                'class' => 'flex items-center space-x-2',
            ]);
        } else {
            $this->extraAttributes([
                'class' => 'flex justify-between items-center space-x-2',
            ]);
        }
    }

    public function icon(string|Closure|null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function iconColor(string|Closure|null $iconColor): static
    {
        $this->iconColor = $iconColor;

        return $this;
    }

    public function buttonText(string|Closure|null $buttonText): static
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    public function iconOnly(bool|Closure|null $iconOnly = true): static
    {
        $this->iconOnly = $iconOnly;

        return $this;
    }

    public function getButtonText(): ?string
    {
        return $this->evaluate($this->buttonText);
    }

    public function getIconOnly(): ?bool
    {
        return $this->evaluate($this->iconOnly);
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function getIconColor(): ?string
    {
        return $this->evaluate($this->iconColor);
    }
}
