@props([
    'title',
    'description',
    'icon' => null,
    'color' => 'blue',
    'showAnimation' => true
])

@php
$colorClasses = [
    'blue' => 'bg-blue-600/20 border-blue-500/50 text-blue-400',
    'purple' => 'bg-purple-600/20 border-purple-500/50 text-purple-400',
    'green' => 'bg-green-600/20 border-green-500/50 text-green-400',
    'yellow' => 'bg-yellow-600/20 border-yellow-500/50 text-yellow-400',
    'red' => 'bg-red-600/20 border-red-500/50 text-red-400',
    'indigo' => 'bg-indigo-600/20 border-indigo-500/50 text-indigo-400',
];

$colorClass = $colorClasses[$color] ?? $colorClasses['blue'];
@endphp

<div class="text-center {{ $showAnimation ? 'constellation-node' : '' }}">
    <div class="w-16 h-16 {{ $colorClass }} border-2 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm">
        @if($icon)
            <svg class="w-8 h-8 {{ $showAnimation ? 'constellation-icon' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $icon !!}
            </svg>
        @else
            <div class="w-4 h-4 bg-current rounded-full"></div>
        @endif
    </div>
    <h4 class="text-technical-subheading mb-2">{{ $title }}</h4>
    <p class="text-specification text-sm">{{ $description }}</p>
</div>

