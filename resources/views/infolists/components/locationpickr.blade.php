<x-dynamic-component
    :component="$getEntryWrapperView()"
    :entry="$entry"
>
    @php
        $cssHref = \Filament\Support\Facades\FilamentAsset::getStyleHref('locationpickr', 'arbermustafa/filament-locationpickr-field');
        $alpineSrc = \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('locationpickr-entry', 'arbermustafa/filament-locationpickr-field');
    @endphp
    <div
        @if($cssHref) x-load x-load-css="[@js($cssHref)]" @endif
        @if($alpineSrc) x-load-src="{{ $alpineSrc }}" @endif
        wire:ignore
        x-data="locationPickrEntry({
            location: @js($getState()),
            config: {{ $getMapConfig() }},
        })"
        x-ignore
    >
        <div
            x-ref="map"
            class="locationPickr w-full"
            style="height: {{ $getHeight() }}"
        ></div>
    </div>
</x-dynamic-component>
