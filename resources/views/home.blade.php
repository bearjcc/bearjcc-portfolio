@extends('layouts.app')

@section('title', 'BearJCC - Professional Portfolio')
@section('description', 'Professional portfolio showcasing web development projects and technical articles.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-12">
        <div class="technical-container">
            <!-- Bear Logo -->
            <div class="mb-8">
                <img src="{{ asset('images/brand/bear-logo-64.svg') }}" alt="BearJCC Logo" class="w-24 h-24 mb-6 opacity-90">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 bear-text-glow">
                    BearJCC
                </h1>
                <p class="text-xl md:text-2xl text-technical-subheading max-w-3xl mb-4 font-light">
                    Connecting the dots between design and engineering
                </p>
                <p class="text-base text-specification max-w-4xl leading-relaxed mb-6">
                    Just like it is up to us to connect the dots to draw constellations, 
                    so too is it up to us to connect various fields of study. 
                    From web development to CAD automation, I bridge the gap between 
                    technical complexity and user accessibility.
                </p>
            </div>

            <!-- Call to Action -->
            <div class="mb-8">
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('projects.index') }}" class="bear-button text-base px-6 py-3">
                        View My Projects
                    </a>
                    <a href="{{ route('about') }}" class="bear-button-secondary text-base px-6 py-3">
                        Learn More About Me
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Constellation of Expertise -->
    <section class="py-12 bg-black/10">
        <div class="technical-container">
            <div class="technical-section">
                <div class="technical-section-header mb-8">
                    <h2 class="text-3xl md:text-4xl text-technical-heading mb-3">Constellation of Expertise</h2>
                    <p class="text-lg text-specification max-w-3xl">
                        How different fields of expertise interconnect to create innovative solutions
                    </p>
                </div>
                
                <div class="relative">
                    <!-- Constellation Lines -->
                    <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 1200 200">
                        <!-- Primary connections - better aligned with icon centers -->
                        <line class="constellation-line" x1="100" y1="100" x2="300" y2="100" stroke="rgba(59, 130, 246, 0.8)" stroke-width="3"/>
                        <line class="constellation-line" x1="300" y1="100" x2="500" y2="100" stroke="rgba(59, 130, 246, 0.8)" stroke-width="3"/>
                        <line class="constellation-line" x1="500" y1="100" x2="700" y2="100" stroke="rgba(59, 130, 246, 0.8)" stroke-width="3"/>
                        <line class="constellation-line" x1="700" y1="100" x2="900" y2="100" stroke="rgba(59, 130, 246, 0.8)" stroke-width="3"/>
                        <line class="constellation-line" x1="900" y1="100" x2="1100" y2="100" stroke="rgba(59, 130, 246, 0.8)" stroke-width="3"/>
                        
                        <!-- Cross connections for visual interest -->
                        <line class="constellation-line" x1="100" y1="100" x2="500" y2="100" stroke="rgba(59, 130, 246, 0.4)" stroke-width="2"/>
                        <line class="constellation-line" x1="300" y1="100" x2="900" y2="100" stroke="rgba(59, 130, 246, 0.4)" stroke-width="2"/>
                        <line class="constellation-line" x1="700" y1="100" x2="1100" y2="100" stroke="rgba(59, 130, 246, 0.4)" stroke-width="2"/>
                    </svg>
                    
                    <!-- Expertise Nodes -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 relative z-10">
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-blue-600/20 border-2 border-blue-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-blue-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">Web Development</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">Laravel, Vue.js, Modern Web Technologies</p>
                        </div>
                        
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-purple-600/20 border-2 border-purple-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-purple-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">UI/UX Design</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">User-Centered Design, Accessibility</p>
                        </div>
                        
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-green-600/20 border-2 border-green-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-green-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">Automation</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">Process Optimization, Workflow Design</p>
                        </div>
                        
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-yellow-600/20 border-2 border-yellow-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-yellow-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">Programming</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">Full-Stack Development, Problem Solving</p>
                        </div>
                        
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-red-600/20 border-2 border-red-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-red-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">CAD Design</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">SOLIDWORKS, DriveWorks, Engineering</p>
                        </div>
                        
                        <div class="text-center constellation-node">
                            <div class="w-16 h-16 bg-indigo-600/20 border-2 border-indigo-500/50 rounded-full mx-auto mb-4 flex items-center justify-center backdrop-blur-sm shadow-lg">
                                <svg class="w-8 h-8 text-indigo-400 constellation-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-base text-technical-subheading mb-2 font-semibold">Documentation</h3>
                            <p class="text-specification text-xs leading-relaxed max-w-[100px] mx-auto">Technical Writing, Knowledge Management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects Section -->
    <section class="py-12">
        <div class="technical-container">
            <div class="technical-section-header mb-8">
                <h2 class="text-3xl md:text-4xl text-technical-heading mb-3">Recent Projects</h2>
                <p class="text-lg text-specification max-w-3xl">
                    Showcasing innovative solutions across web development and automation
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card 1 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 1" class="w-full h-40 object-cover rounded-lg group-hover:shadow-lg transition-shadow duration-300">
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-2 font-semibold">Portfolio Website</h3>
                    <p class="text-specification mb-4 leading-relaxed">Professional portfolio built with Laravel, featuring dynamic star effects and responsive design.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Laravel</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">JavaScript</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        View Project 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Project Card 2 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 2" class="w-full h-40 object-cover rounded-lg group-hover:shadow-lg transition-shadow duration-300">
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-2 font-semibold">E-commerce Platform</h3>
                    <p class="text-specification mb-4 leading-relaxed">Full-featured online store with payment processing and inventory management.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">PHP</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">MySQL</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Stripe</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        View Project 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Project Card 3 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-4">
                        <img src="{{ asset('images/brand/gradient-bg-optimized.svg') }}" alt="Project 3" class="w-full h-40 object-cover rounded-lg group-hover:shadow-lg transition-shadow duration-300">
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-2 font-semibold">Task Management App</h3>
                    <p class="text-specification mb-4 leading-relaxed">Collaborative task management application with real-time updates and team features.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Vue.js</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Node.js</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-xs font-medium">Socket.io</span>
                    </div>
                    <a href="{{ route('projects.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        View Project 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles Section -->
    <section class="py-12 bg-black/10">
        <div class="technical-container">
            <div class="technical-section-header mb-8">
                <h2 class="text-3xl md:text-4xl text-technical-heading mb-3">Latest Articles</h2>
                <p class="text-lg text-specification max-w-3xl">
                    Insights and tutorials on modern web development and technology
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Article Card 1 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-3">
                        <span class="text-sm text-blue-400 font-medium bg-blue-400/10 px-3 py-1 rounded-full">Web Development</span>
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-3 font-semibold leading-tight">Building Modern Web Applications</h3>
                    <p class="text-specification mb-4 leading-relaxed">Exploring the latest trends and best practices in modern web development, from performance optimization to user experience design.</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        Read More 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Article Card 2 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-3">
                        <span class="text-sm text-purple-400 font-medium bg-purple-400/10 px-3 py-1 rounded-full">Laravel</span>
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-3 font-semibold leading-tight">Laravel Best Practices</h3>
                    <p class="text-specification mb-4 leading-relaxed">Essential tips and techniques for building robust Laravel applications, covering architecture, security, and performance.</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        Read More 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <!-- Article Card 3 -->
                <div class="technical-card group hover:transform hover:scale-105 transition-all duration-300">
                    <div class="mb-3">
                        <span class="text-sm text-green-400 font-medium bg-green-400/10 px-3 py-1 rounded-full">Performance</span>
                    </div>
                    <h3 class="text-lg text-technical-subheading mb-3 font-semibold leading-tight">Optimizing Web Performance</h3>
                    <p class="text-specification mb-4 leading-relaxed">Strategies for improving website speed and user experience, from frontend optimization to backend efficiency.</p>
                    <a href="{{ route('articles.index') }}" class="text-white/80 hover:text-white transition-colors text-sm font-medium inline-flex items-center">
                        Read More 
                        <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-12">
        <div class="technical-container">
            <div class="technical-section-header mb-8">
                <h2 class="text-3xl md:text-4xl text-technical-heading mb-3">About BearJCC</h2>
                <p class="text-lg text-specification max-w-3xl">
                    Passionate about creating elegant solutions that bridge technology and design
                </p>
            </div>
            <div class="max-w-4xl">
                <p class="text-base text-specification mb-6 leading-relaxed">
                    I'm a passionate web developer with expertise in modern web technologies. 
                    I specialize in creating elegant, user-friendly applications that solve real-world problems.
                    My approach combines technical excellence with thoughtful design to deliver 
                    solutions that are both powerful and accessible.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-white/10 rounded-full text-sm font-medium hover:bg-white/20 transition-colors">Laravel</span>
                    <span class="px-3 py-1 bg-white/10 rounded-full text-sm font-medium hover:bg-white/20 transition-colors">Vue.js</span>
                    <span class="px-3 py-1 bg-white/10 rounded-full text-sm font-medium hover:bg-white/20 transition-colors">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-white/10 rounded-full text-sm font-medium hover:bg-white/20 transition-colors">MySQL</span>
                    <span class="px-3 py-1 bg-white/10 rounded-full text-sm font-medium hover:bg-white/20 transition-colors">Docker</span>
                </div>
                <div>
                    <a href="{{ route('about') }}" class="bear-button text-base px-6 py-3">
                        Learn More About Me
                    </a>
                </div>
            </div>
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
});
</script>
@endpush
@endsection
