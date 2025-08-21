@extends('layouts.app')

@section('title', 'BearJCC - Professional Portfolio')
@section('description', 'Professional portfolio showcasing web development projects and technical articles with deep blue gradient branding.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20 fade-in">
        <div class="max-w-4xl mx-auto">
            <!-- Bear Logo -->
            <div class="mb-8">
                <img src="{{ asset('images/brand/bear-logo.svg') }}" alt="BearJCC Logo" class="w-32 h-32 mx-auto bear-logo">
            </div>
            
            <!-- Hero Text -->
            <h1 class="text-5xl md:text-7xl font-bold mb-6 bear-text-glow">
                BearJCC
            </h1>
            <p class="text-xl md:text-2xl text-white/80 mb-8 max-w-2xl mx-auto">
                Professional Web Developer & Technical Writer
            </p>
            <p class="text-lg text-white/60 mb-12 max-w-3xl mx-auto">
                Crafting elegant web solutions with modern technologies. 
                Passionate about clean code, user experience, and sharing knowledge through technical articles.
            </p>
            
            <!-- Call to Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('projects.index') }}" class="bear-button">
                    View Projects
                </a>
                <a href="{{ route('articles.index') }}" class="bear-button">
                    Read Blog
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Projects Section -->
    <section class="py-16 fade-in">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Recent Projects
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Portfolio Website</h3>
                    <p class="text-white/70 mb-4">Professional portfolio built with Laravel, featuring dynamic star effects and responsive design.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">JavaScript</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors">
                        View Project →
                    </a>
                </div>

                <!-- Project Card 2 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 2" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold mb-2">E-commerce Platform</h3>
                    <p class="text-white/70 mb-4">Full-featured online store with payment processing and inventory management.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Stripe</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors">
                        View Project →
                    </a>
                </div>

                <!-- Project Card 3 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 3" class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Task Management App</h3>
                    <p class="text-white/70 mb-4">Collaborative task management application with real-time updates and team features.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Socket.io</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors">
                        View Project →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles Section -->
    <section class="py-16 fade-in">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Latest Articles
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article Card 1 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <span class="text-sm text-white/60">Web Development</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Building Modern Web Applications</h3>
                    <p class="text-white/70 mb-4">Exploring the latest trends and best practices in modern web development...</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors">
                        Read More →
                    </a>
                </div>

                <!-- Article Card 2 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <span class="text-sm text-white/60">Laravel</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Laravel Best Practices</h3>
                    <p class="text-white/70 mb-4">Essential tips and techniques for building robust Laravel applications...</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors">
                        Read More →
                    </a>
                </div>

                <!-- Article Card 3 -->
                <div class="bear-card p-6">
                    <div class="mb-4">
                        <span class="text-sm text-white/60">Performance</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Optimizing Web Performance</h3>
                    <p class="text-white/70 mb-4">Strategies for improving website speed and user experience...</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 bear-text-glow">
                About BearJCC
            </h2>
            <p class="text-lg text-white/80 mb-8 max-w-3xl mx-auto">
                I'm a passionate web developer with expertise in modern web technologies. 
                I specialize in creating elegant, user-friendly applications that solve real-world problems.
            </p>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="px-4 py-2 bg-white/10 rounded-full">Laravel</span>
                <span class="px-4 py-2 bg-white/10 rounded-full">Vue.js</span>
                <span class="px-4 py-2 bg-white/10 rounded-full">Tailwind CSS</span>
                <span class="px-4 py-2 bg-white/10 rounded-full">MySQL</span>
                <span class="px-4 py-2 bg-white/10 rounded-full">Docker</span>
            </div>
            <a href="{{ route('about') }}" class="bear-button">
                Learn More About Me
            </a>
        </div>
    </section>
</div>

@push('scripts')
<script>
// Initialize star effects when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Call the stars function from stars.js
    if (typeof stars === 'function') {
        stars();
    }
    
    // Add fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });
});
</script>
@endpush
@endsection
