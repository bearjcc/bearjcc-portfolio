@extends('layouts.app')

@section('title', 'Projects - BearJCC Portfolio')
@section('description', 'Portfolio of web development projects showcasing technical skills and creative solutions.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-hero mb-6 bear-text-glow">
                My Projects
            </h1>
            <p class="text-body-large text-white/80 max-w-2xl mx-auto">
                A collection of web applications, websites, and technical solutions that demonstrate my skills and passion for development.
            </p>
        </div>
    </section>

    <!-- Projects Content -->
    <section class="max-w-6xl mx-auto px-4 pb-20">
        <!-- Coming Soon Message -->
        <div class="bear-card-elevated p-12 text-center">
            <div class="mb-8">
                <svg class="w-24 h-24 mx-auto text-white/60 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
            </div>
            <h2 class="text-heading mb-4">Portfolio Coming Soon</h2>
            <p class="text-body text-white/70 mb-8 max-w-2xl mx-auto">
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

        <!-- Future Project Structure Preview -->
        <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sample Project Card 1 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">Laravel</span>
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Vue.js</span>
                </div>
                <h3 class="text-subheading mb-3">E-Commerce Platform</h3>
                <p class="text-body text-white/70 mb-4">
                    A full-stack e-commerce solution with advanced features, payment integration, and admin dashboard.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>

            <!-- Sample Project Card 2 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">React</span>
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Node.js</span>
                </div>
                <h3 class="text-subheading mb-3">Task Management App</h3>
                <p class="text-body text-white/70 mb-4">
                    A collaborative project management tool with real-time updates and team collaboration features.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>

            <!-- Sample Project Card 3 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">Python</span>
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Machine Learning</span>
                </div>
                <h3 class="text-subheading mb-3">Data Analysis Dashboard</h3>
                <p class="text-body text-white/70 mb-4">
                    An interactive dashboard for visualizing complex datasets with machine learning insights.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>
        </div>

        <!-- Technology Stack Preview -->
        <div class="mt-20">
            <h2 class="text-heading text-center mb-12">Technologies I Work With</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">🐘</span>
                    </div>
                    <h3 class="text-subheading">PHP/Laravel</h3>
                    <p class="text-caption">Backend Development</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">⚛️</span>
                    </div>
                    <h3 class="text-subheading">React/Vue.js</h3>
                    <p class="text-caption">Frontend Frameworks</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">🎨</span>
                    </div>
                    <h3 class="text-subheading">Tailwind CSS</h3>
                    <p class="text-caption">Styling & Design</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white/10 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">🐳</span>
                    </div>
                    <h3 class="text-subheading">Docker</h3>
                    <p class="text-caption">DevOps & Deployment</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the cards and tech stack
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.bear-card');
        const techItems = document.querySelectorAll('.grid > div');
        
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
