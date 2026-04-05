<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        {{
            $attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class(['fi-fo-placeholder', 'sm:text-sm'])
        }}
    >
        {{ $getContent() }}

        @if ($getIconOnly())
            <x-filament::icon-button
                :icon="$getIcon()"
                :color="$getIconColor()"
                :label="$getButtonText() ?? __('Copy')"
                size="sm"
                x-on:click="navigator.clipboard.writeText(@js($getContent()))"
            />
        @else
            <x-filament::button
                :icon="$getIcon()"
                :color="$getIconColor()"
                size="sm"
                x-on:click="navigator.clipboard.writeText(@js($getContent()))"
            >
                {{ $getButtonText() }}
            </x-filament::button>
        @endif
    </div>
</x-dynamic-component>
