@props([
    'title' => 'Constellation Map',
    'description' => 'How this connects different fields of expertise',
    'connections' => [],
    'showAnimation' => true
])

<div class="technical-section">
    <div class="technical-section-header">
        <h3 class="text-technical-heading">{{ $title }}</h3>
        @if($description)
            <p class="text-specification text-sm">{{ $description }}</p>
        @endif
    </div>
    
    <div class="relative">
        <!-- Dynamic Constellation Lines -->
        <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 800 300">
            @foreach($connections as $index => $connection)
                <line 
                    class="{{ $showAnimation ? 'constellation-line' : '' }}" 
                    x1="{{ $connection['from']['x'] }}" 
                    y1="{{ $connection['from']['y'] }}" 
                    x2="{{ $connection['to']['x'] }}" 
                    y2="{{ $connection['to']['y'] }}" 
                    stroke="{{ $connection['color'] ?? 'rgba(59, 130, 246, 0.6)' }}" 
                    stroke-width="{{ $connection['width'] ?? '2' }}"
                    style="{{ !$showAnimation ? 'animation-delay: ' . ($index * 0.2) . 's' : '' }}"
                />
            @endforeach
        </svg>
        
        <!-- Dynamic Expertise Nodes -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 relative z-10">
            {{ $slot }}
        </div>
    </div>
</div>

