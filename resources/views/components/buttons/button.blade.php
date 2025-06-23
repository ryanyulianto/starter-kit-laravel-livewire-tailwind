@props([
    'color' => 'default',
    'size' => 'md',
    'disabled' => false,
    'loading' => false,
    'loadingText' => 'Loading...',
    'fullWidth' => false,
    'variant' => 'solid',
    'iconClass' => null,
    'iconPosition' => 'left',
    'href' => null,
    'type' => 'button',
    'target' => null,
    'isShadow' => false,
    'isRounded' => false,
    'isScale' => true,
    'hasRipple' => false,
    'hasFocus' => true,
    'isGradient' => false, // Tambahan prop untuk gradient
    'gradientFrom' => null, // Warna awal gradient
    'gradientTo' => null, // Warna akhir gradient
    'gradientDir' => 'r', // Arah gradient: r=right, l=left, t=top, b=bottom
])
@php

    $baseClasses =
        'relative inline-flex items-center justify-center font-medium transition-all duration-200 rounded-md leading-none focus:outline-none cursor-pointer';

    $sizeClasses = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-base',
        'lg' => 'px-5 py-3 text-lg',
        'xl' => 'px-6 py-3.5 text-xl',
    ];

    $variants = [
        'solid' => [
            'default' => 'bg-gray-200 hover:bg-gray-300 text-gray-800 focus:ring-gray-300',
            'white' => 'bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 focus:ring-gray-200',
            'primary' =>
                'bg-[var(--accent)] hover:bg-[var(--accent-hover)] text-[var(--accent-fg)] focus:ring-[var(--accent-hover)]',
            'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white focus:ring-gray-300',
            'accent' => 'bg-purple-600 hover:bg-purple-700 text-white focus:ring-purple-300',
            'danger' => 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-300',
            'warning' => 'bg-amber-500 hover:bg-amber-600 text-white focus:ring-amber-300',
            'success' => 'bg-emerald-600 hover:bg-emerald-700 text-white focus:ring-emerald-300',
            'info' => 'bg-sky-500 hover:bg-sky-600 text-white focus:ring-sky-300',
        ],
        'outline' => [
            'default' => 'border border-gray-300 hover:bg-gray-100 text-gray-700 focus:ring-gray-200',
            'white' => 'border border-white hover:bg-white/10 text-white focus:ring-white/30',
            'primary' =>
                'border border-[var(--accent)] hover:bg-[var(--color-accent-100)] text-[var(--color-accent-600)] focus:ring-[var(--color-accent-100)]',
            'secondary' => 'border border-gray-500 hover:bg-gray-50 text-gray-600 focus:ring-gray-200',
            'accent' => 'border border-purple-500 hover:bg-purple-50 text-purple-600 focus:ring-purple-200',
            'danger' => 'border border-red-500 hover:bg-red-50 text-red-600 focus:ring-red-200',
            'warning' => 'border border-amber-500 hover:bg-amber-50 text-amber-600 focus:ring-amber-200',
            'success' => 'border border-emerald-500 hover:bg-emerald-50 text-emerald-600 focus:ring-emerald-200',
            'info' => 'border border-sky-500 hover:bg-sky-50 text-sky-600 focus:ring-sky-200',
        ],
        'soft' => [
            'default' => 'bg-gray-100 hover:bg-gray-200 text-gray-700 focus:ring-gray-200',
            'primary' => 'bg-blue-50 hover:bg-blue-100 text-blue-700 focus:ring-blue-200',
            'secondary' => 'bg-gray-100 hover:bg-gray-200 text-gray-700 focus:ring-gray-200',
            'accent' => 'bg-purple-50 hover:bg-purple-100 text-purple-700 focus:ring-purple-200',
            'danger' => 'bg-red-50 hover:bg-red-100 text-red-700 focus:ring-red-200',
            'warning' => 'bg-amber-50 hover:bg-amber-100 text-amber-700 focus:ring-amber-200',
            'success' => 'bg-emerald-50 hover:bg-emerald-100 text-emerald-700 focus:ring-emerald-200',
            'info' => 'bg-sky-50 hover:bg-sky-100 text-sky-700 focus:ring-sky-200',
        ],
        'ghost' => [
            'default' => 'hover:bg-gray-100 text-gray-700 focus:ring-gray-200',
            'primary' => 'hover:bg-blue-50 text-blue-600 focus:ring-blue-200',
            'secondary' => 'hover:bg-gray-100 text-gray-600 focus:ring-gray-200',
            'accent' => 'hover:bg-purple-50 text-purple-600 focus:ring-purple-200',
            'danger' => 'hover:bg-red-50 text-red-600 focus:ring-red-200',
            'warning' => 'hover:bg-amber-50 text-amber-600 focus:ring-amber-200',
            'success' => 'hover:bg-emerald-50 text-emerald-600 focus:ring-emerald-200',
            'info' => 'hover:bg-sky-50 text-sky-600 focus:ring-sky-200',
        ],
    ];

    // Custom gradient colors based on color prop if not specified
    $defaultGradients = [
        'default' => ['from-gray-200', 'to-gray-300', 'hover:from-gray-300', 'hover:to-gray-400'],
        'white' => ['from-gray-50', 'to-white', 'hover:from-gray-100', 'hover:to-gray-50'],
        'primary' => ['from-blue-500', 'to-blue-600', 'hover:from-blue-600', 'hover:to-blue-700'],
        'secondary' => ['from-gray-600', 'to-gray-700', 'hover:from-gray-700', 'hover:to-gray-800'],
        'accent' => ['from-purple-500', 'to-purple-600', 'hover:from-purple-600', 'hover:to-purple-700'],
        'danger' => ['from-red-500', 'to-red-600', 'hover:from-red-600', 'hover:to-red-700'],
        'warning' => ['from-amber-400', 'to-amber-500', 'hover:from-amber-500', 'hover:to-amber-600'],
        'success' => ['from-emerald-500', 'to-emerald-600', 'hover:from-emerald-600', 'hover:to-emerald-700'],
        'info' => ['from-sky-400', 'to-sky-500', 'hover:from-sky-500', 'hover:to-sky-600'],
    ];

    // Build gradient class
    $gradientClasses = '';
    if ($isGradient) {
        $gradientDirection = 'bg-gradient-to-' . $gradientDir;

        if ($gradientFrom && $gradientTo) {
            // Use custom colors if provided
            $gradientClasses =
                $gradientDirection .
                ' from-' .
                $gradientFrom .
                ' to-' .
                $gradientTo .
                ' hover:from-' .
                $gradientFrom .
                ' hover:to-' .
                $gradientTo;
        } else {
            // Use default colors based on color prop
            $defaultGradient = $defaultGradients[$color] ?? $defaultGradients['default'];
            $gradientClasses =
                $gradientDirection .
                ' ' .
                $defaultGradient[0] .
                ' ' .
                $defaultGradient[1] .
                ' ' .
                $defaultGradient[2] .
                ' ' .
                $defaultGradient[3];
        }
    }

    $shadows = [
        'default' => 'shadow-md shadow-gray-200/50 hover:shadow-lg hover:shadow-gray-300/50',
        'white' => 'shadow-md shadow-gray-200/50 hover:shadow-lg hover:shadow-gray-300/50',
        'primary' => 'shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/30',
        'secondary' => 'shadow-md shadow-gray-500/20 hover:shadow-lg hover:shadow-gray-500/30',
        'accent' => 'shadow-md shadow-purple-500/20 hover:shadow-lg hover:shadow-purple-500/30',
        'danger' => 'shadow-md shadow-red-500/20 hover:shadow-lg hover:shadow-red-500/30',
        'warning' => 'shadow-md shadow-amber-500/20 hover:shadow-lg hover:shadow-amber-500/30',
        'success' => 'shadow-md shadow-emerald-500/20 hover:shadow-lg hover:shadow-emerald-500/30',
        'info' => 'shadow-md shadow-sky-500/20 hover:shadow-lg hover:shadow-sky-500/30',
    ];

    $disabledClasses = 'disabled:opacity-70 disabled:cursor-not-allowed disabled:pointer-events-none';
    $focusClasses = $hasFocus ? 'focus:ring-2 focus:ring-offset-1' : '';
    $roundedClasses = $isRounded ? 'rounded-full' : 'rounded-md';
    $scaleClasses = $isScale ? 'hover:scale-[1.02] active:scale-[0.98]' : '';

    // Combine classes
    $classes = $baseClasses;
    $classes .= ' ' . ($sizeClasses[$size] ?? $sizeClasses['md']);
    // If gradient is enabled, use gradient classes instead of variant classes
    if ($isGradient) {
        $classes .= ' ' . $gradientClasses;
        // Add text color based on variant and color
        if (
            $variant === 'solid' ||
            ($variant === 'outline' &&
                in_array($color, ['primary', 'accent', 'danger', 'warning', 'success', 'info', 'secondary']))
        ) {
            $classes .= ' text-white';
        } else {
            $classes .= ' text-gray-800';
        }
    } else {
        $classes .= ' ' . ($variants[$variant][$color] ?? $variants['solid']['default']);
    }
    $classes .= ' ' . $focusClasses;
    $classes .= ' ' . $disabledClasses;
    $classes .= ' ' . $roundedClasses;
    $classes .= ' ' . $scaleClasses;
    $classes .= $isShadow ? ' ' . ($shadows[$color] ?? $shadows['default']) : '';
    $classes .= $fullWidth ? ' w-full' : '';

    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} @if ($href) href="{{ $href }}" @endif
    @if ($target) wire:target="{{ $target }}"
wire:loading.attr="disabled" @endif
    {{ $attributes->merge([
        'type' => $href ? null : $type,
        'disabled' => $disabled || $loading,
        'class' => $classes,
    ]) }}>

    @if ($loading || ($target && $iconPosition === 'left'))
        <span class="inline-flex items-center">
            <div wire:loading wire:target="{{ $target }}"
                class="inline-block mr-1.5 rounded-full border-2 border-current animate-spin size-4 border-t-transparent">
                <span class="sr-only">{{ $loadingText }}</span>
            </div>
        </span>
    @endif
    @if ($iconClass && $iconPosition === 'left' && !$loading)
        <span class="inline-flex items-center justify-center">
            <i class="{{ $iconClass }}" wire:loading.remove wire:target="{{ $target }}"></i>
        </span>
    @endif

    <span class="{{ $loading ? 'opacity-80' : '' }}">{{ $slot }}</span>


    @if ($iconClass && $iconPosition === 'right' && !$loading)
        <span class="inline-flex items-center justify-center">
            <i class="{{ $iconClass }}" wire:loading.remove wire:target="{{ $target }}"></i>
        </span>
    @endif

    @if ($loading || ($target && $iconPosition === 'right'))
        <span class="inline-flex items-center">
            <div wire:loading wire:target="{{ $target }}"
                class="inline-block ml-1.5 rounded-full border-2 border-current animate-spin size-4 border-t-transparent">
                <span class="sr-only">{{ $loadingText }}</span>
            </div>
        </span>
    @endif

    @if ($hasRipple)
        <span class="overflow-hidden absolute inset-0 rounded-md pointer-events-none" x-data="{ isRippling: false, x: 0, y: 0 }"
            @click="isRippling = true; x = $event.offsetX; y = $event.offsetY;" @animationend="isRippling = false">
            <span x-cloak x-show="isRippling" x-bind:style="'left: ' + x + 'px; top: ' + y + 'px'"
                class="absolute rounded-full bg-white/20 animate-ripple"></span>
        </span>
    @endif

    </{{ $tag }}>
