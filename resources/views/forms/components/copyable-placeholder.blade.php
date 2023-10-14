<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :state-path="$getStatePath()"
>
    <div
        {{ $attributes->merge($getExtraAttributes())->class(['filament-forms-placeholder-component']) }}
    >
        {{ $getContent() }}

        @if($getIconOnly())
            <x-filament::icon-button
                :attributes="\Filament\Support\prepare_inherited_attributes($attributes)"
                :dark-mode="config('forms.dark_mode')"
                :icon="$getIcon()"
                :color="$getIconColor()"
                x-on:click="navigator.clipboard.writeText('{{ $getContent() }}')"
            />
        @else
            <x-filament::button
                :attributes="\Filament\Support\prepare_inherited_attributes($attributes)"
                :dark-mode="config('forms.dark_mode')"
                :icon="$getIcon()"
                :color="$getIconColor()"
                size="sm"
                x-on:click="navigator.clipboard.writeText('{{ $getContent() }}')"
            >
                {{ $getButtonText() }}
            </x-filament::button>
        @endif
    </div>
</x-dynamic-component>
