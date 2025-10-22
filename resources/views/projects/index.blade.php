@extends('layouts.app')

@section('title', 'Projects - BearJCC Portfolio')
@section('description', 'Portfolio of web development projects showcasing technical skills and creative solutions.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    My Projects
                </h1>
                <p class="text-technical-subheading max-w-3xl mx-auto">
                    A collection of web applications, websites, and technical solutions that demonstrate my skills and passion for development.
                </p>
            </div>
        </div>
    </section>

    <!-- Projects Content -->
    <div class="pb-32">
        <div class="technical-container">
            <!-- Coming Soon Message -->
            <div class="technical-section">
                <div class="technical-specification text-center">
                    <div class="mb-12">
                        <svg class="w-24 h-24 mx-auto text-white/60 mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h2 class="text-technical-heading mb-8">Portfolio Coming Soon</h2>
                    <p class="text-specification mb-12 max-w-3xl mx-auto">
                        I'm currently preparing my project portfolio. Each project will showcase different technologies, 
                        problem-solving approaches, and the development process behind the final product.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('articles.index') }}" class="bear-button">
                            Read My Blog
                        </a>
                        <a href="{{ route('contact.index') }}" class="bear-button-secondary">
                            Discuss Collaboration
                        </a>
                    </div>
                </div>
            </div>

            <!-- Future Project Structure Preview -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Project Preview</h2>
                </div>
                <div class="technical-grid">
                    <!-- Sample Project Card 1 -->
                    <div class="technical-card">
                        <div class="mb-4">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs ml-2">Vue.js</span>
                        </div>
                        <h3 class="text-technical-subheading mb-4">E-Commerce Platform</h3>
                        <p class="text-specification mb-4">
                            A full-stack e-commerce solution with advanced features, payment integration, and admin dashboard.
                        </p>
                        <div class="text-sm text-white/60">Coming Soon</div>
                    </div>

                    <!-- Sample Project Card 2 -->
                    <div class="technical-card">
                        <div class="mb-4">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">React</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs ml-2">Node.js</span>
                        </div>
                        <h3 class="text-technical-subheading mb-4">Task Management App</h3>
                        <p class="text-specification mb-4">
                            A collaborative project management tool with real-time updates and team collaboration features.
                        </p>
                        <div class="text-sm text-white/60">Coming Soon</div>
                    </div>

                    <!-- Sample Project Card 3 -->
                    <div class="technical-card">
                        <div class="mb-4">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Python</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs ml-2">Machine Learning</span>
                        </div>
                        <h3 class="text-technical-subheading mb-4">Data Analysis Dashboard</h3>
                        <p class="text-specification mb-4">
                            An interactive dashboard for visualizing complex datasets with machine learning insights.
                        </p>
                        <div class="text-sm text-white/60">Coming Soon</div>
                    </div>
                </div>
            </div>

            <!-- Technology Stack Preview -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">Technologies I Work With</h2>
                </div>
                <div class="technical-grid">
                    <div class="technical-card text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🐘</span>
                        </div>
                        <h3 class="text-technical-subheading mb-2">PHP/Laravel</h3>
                        <p class="text-specification text-sm">Backend Development</p>
                    </div>
                    <div class="technical-card text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">⚛️</span>
                        </div>
                        <h3 class="text-technical-subheading mb-2">React/Vue.js</h3>
                        <p class="text-specification text-sm">Frontend Frameworks</p>
                    </div>
                    <div class="technical-card text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🎨</span>
                        </div>
                        <h3 class="text-technical-subheading mb-2">Tailwind CSS</h3>
                        <p class="text-specification text-sm">Styling & Design</p>
                    </div>
                    <div class="technical-card text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🐳</span>
                        </div>
                        <h3 class="text-technical-subheading mb-2">Docker</h3>
                        <p class="text-specification text-sm">DevOps & Deployment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the cards and tech stack
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.technical-card');
        const techItems = document.querySelectorAll('.technical-grid > div');
        
        // Animate project cards
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 200);
        });

        // Animate tech stack items
        techItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.6s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, 800 + (index * 100));
        });
    });
</script>
@endpush
