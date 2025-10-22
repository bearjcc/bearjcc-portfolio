@extends('layouts.app')

@section('title', 'shadcn/ui Components Showcase - BearJCC Portfolio')
@section('description', 'Explore all available shadcn/ui components for the BearJCC portfolio website.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    shadcn/ui Components
                </h1>
                <p class="text-technical-subheading max-w-3xl mx-auto">
                    Explore all available shadcn/ui components. Click on any component to see its implementation and decide which ones to keep for your portfolio.
                </p>
            </div>
        </div>
    </section>

    <!-- Components Showcase -->
    <div class="pb-32">
        <div class="technical-container">
            <!-- Buttons Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Buttons</h2>
                </div>
                <div class="technical-grid">
                    <!-- Default Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Default Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Default Button
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-primary"&gt;Default Button&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Secondary Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2">
                                Secondary Button
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-secondary"&gt;Secondary Button&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Outline Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Outline Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Outline Button
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-outline"&gt;Outline Button&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Destructive Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Destructive Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-destructive text-destructive-foreground hover:bg-destructive/90 h-10 px-4 py-2">
                                Delete
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-destructive"&gt;Delete&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Ghost Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Ghost Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Ghost Button
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-ghost"&gt;Ghost Button&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Link Button -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Link Button</h3>
                        <div class="space-y-4">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-primary underline-offset-4 hover:underline h-10 px-4 py-2">
                                Link Button
                            </button>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;button class="btn btn-link"&gt;Link Button&lt;/button&gt;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Cards</h2>
                </div>
                <div class="technical-grid">
                    <!-- Basic Card -->
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Card Title</h3>
                            <p class="text-sm text-muted-foreground">Card description goes here</p>
                        </div>
                        <div class="p-6 pt-0">
                            <p class="text-sm text-muted-foreground">This is the card content area where you can put any content.</p>
                        </div>
                        <div class="flex items-center p-6 pt-0">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                Action
                            </button>
                        </div>
                    </div>

                    <!-- Image Card -->
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm overflow-hidden">
                        <div class="aspect-video bg-gradient-to-br from-blue-500 to-purple-600"></div>
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Image Card</h3>
                            <p class="text-sm text-muted-foreground">Card with featured image</p>
                        </div>
                        <div class="p-6 pt-0">
                            <p class="text-sm text-muted-foreground">This card includes an image area at the top.</p>
                        </div>
                    </div>

                    <!-- Stats Card -->
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="text-2xl font-semibold leading-none tracking-tight">Statistics</h3>
                            <p class="text-sm text-muted-foreground">Performance metrics</p>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold">1,234</div>
                                    <div class="text-sm text-muted-foreground">Users</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold">567</div>
                                    <div class="text-sm text-muted-foreground">Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Badges Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Badges</h2>
                </div>
                <div class="technical-grid">
                    <!-- Default Badge -->
                    <div class="technical-card text-center">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Default</h3>
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-primary text-primary-foreground hover:bg-primary/80">
                            Default Badge
                        </div>
                    </div>

                    <!-- Secondary Badge -->
                    <div class="technical-card text-center">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Secondary</h3>
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                            Secondary Badge
                        </div>
                    </div>

                    <!-- Destructive Badge -->
                    <div class="technical-card text-center">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Destructive</h3>
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80">
                            Destructive Badge
                        </div>
                    </div>

                    <!-- Outline Badge -->
                    <div class="technical-card text-center">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Outline</h3>
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground">
                            Outline Badge
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inputs Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Inputs</h2>
                </div>
                <div class="technical-grid">
                    <!-- Text Input -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Text Input</h3>
                        <div class="space-y-4">
                            <input type="text" placeholder="Enter your name" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;input type="text" placeholder="Enter your name" class="input"&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Email Input</h3>
                        <div class="space-y-4">
                            <input type="email" placeholder="Enter your email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;input type="email" placeholder="Enter your email" class="input"&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Password Input</h3>
                        <div class="space-y-4">
                            <input type="password" placeholder="Enter your password" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;input type="password" placeholder="Enter your password" class="input"&gt;
                                </code>
                            </div>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Textarea</h3>
                        <div class="space-y-4">
                            <textarea placeholder="Enter your message" rows="4" class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                            <div class="bg-gray-800 p-4 rounded-lg">
                                <code class="text-sm text-gray-300">
                                    &lt;textarea placeholder="Enter your message" class="textarea"&gt;&lt;/textarea&gt;
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alerts Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Alerts</h2>
                </div>
                <div class="technical-grid">
                    <!-- Success Alert -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Success Alert</h3>
                        <div class="rounded-lg border bg-green-500/10 border-green-500/20 p-4">
                            <div class="flex items-center space-x-2">
                                <svg class="h-4 w-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-sm font-medium text-green-500">Success!</span>
                            </div>
                            <p class="mt-2 text-sm text-green-400">Your action was completed successfully.</p>
                        </div>
                    </div>

                    <!-- Error Alert -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Error Alert</h3>
                        <div class="rounded-lg border bg-red-500/10 border-red-500/20 p-4">
                            <div class="flex items-center space-x-2">
                                <svg class="h-4 w-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                                <span class="text-sm font-medium text-red-500">Error!</span>
                            </div>
                            <p class="mt-2 text-sm text-red-400">Something went wrong. Please try again.</p>
                        </div>
                    </div>

                    <!-- Warning Alert -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Warning Alert</h3>
                        <div class="rounded-lg border bg-yellow-500/10 border-yellow-500/20 p-4">
                            <div class="flex items-center space-x-2">
                                <svg class="h-4 w-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                                <span class="text-sm font-medium text-yellow-500">Warning!</span>
                            </div>
                            <p class="mt-2 text-sm text-yellow-400">Please review your input before proceeding.</p>
                        </div>
                    </div>

                    <!-- Info Alert -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Info Alert</h3>
                        <div class="rounded-lg border bg-blue-500/10 border-blue-500/20 p-4">
                            <div class="flex items-center space-x-2">
                                <svg class="h-4 w-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium text-blue-500">Info</span>
                            </div>
                            <p class="mt-2 text-sm text-blue-400">Here's some helpful information for you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Section -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Navigation</h2>
                </div>
                <div class="technical-grid">
                    <!-- Breadcrumbs -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Breadcrumbs</h3>
                        <nav class="flex items-center space-x-2 text-sm">
                            <a href="#" class="text-muted-foreground hover:text-foreground">Home</a>
                            <span class="text-muted-foreground">/</span>
                            <a href="#" class="text-muted-foreground hover:text-foreground">Components</a>
                            <span class="text-muted-foreground">/</span>
                            <span class="text-foreground">Showcase</span>
                        </nav>
                    </div>

                    <!-- Pagination -->
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4 text-bear-gold">Pagination</h3>
                        <nav class="flex items-center space-x-2">
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Previous
                            </button>
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                                1
                            </button>
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                2
                            </button>
                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                Next
                            </button>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="technical-section">
                <div class="technical-specification text-center">
                    <h2 class="text-technical-heading mb-6">Ready to Use These Components?</h2>
                    <p class="text-specification mb-8 max-w-3xl mx-auto">
                        These are just a sample of the available shadcn/ui components. You can integrate any of these into your portfolio pages to create a more polished and professional look.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('home') }}" class="bear-button">
                            Back to Portfolio
                        </a>
                        <a href="https://ui.shadcn.com" target="_blank" class="bear-button-secondary">
                            View Full Documentation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the cards
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.technical-card, .technical-specification');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>
@endpush
