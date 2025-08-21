@extends('layouts.app')

@section('title', 'Blog - BearJCC Portfolio')
@section('description', 'Technical articles and insights about web development, programming, and technology.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-hero mb-6 bear-text-glow">
                Technical Blog
            </h1>
            <p class="text-body-large text-white/80 max-w-2xl mx-auto">
                Insights, tutorials, and thoughts on web development, programming, and the ever-evolving world of technology.
            </p>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="max-w-6xl mx-auto px-4 pb-20">
        <!-- Coming Soon Message -->
        <div class="bear-card-elevated p-12 text-center">
            <div class="mb-8">
                <svg class="w-24 h-24 mx-auto text-white/60 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 5.477 9.246 5 7.5 5s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.523 18.246 19 16.5 19c-1.746 0-3.332-.477-4.5-1.253"></path>
                </svg>
            </div>
            <h2 class="text-heading mb-4">Blog Coming Soon</h2>
            <p class="text-body text-white/70 mb-8 max-w-2xl mx-auto">
                I'm currently working on some great technical content. Expect articles about Laravel development, 
                modern web technologies, and insights from my development journey.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('projects.index') }}" class="bear-button">
                    View My Projects
                </a>
                <a href="{{ route('contact.index') }}" class="bear-button-secondary">
                    Get In Touch
                </a>
            </div>
        </div>

        <!-- Future Blog Structure Preview -->
        <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sample Article Card 1 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">Laravel</span>
                </div>
                <h3 class="text-subheading mb-3">Building Modern APIs with Laravel</h3>
                <p class="text-body text-white/70 mb-4">
                    Learn how to create robust, scalable APIs using Laravel's latest features and best practices.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>

            <!-- Sample Article Card 2 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">Frontend</span>
                </div>
                <h3 class="text-subheading mb-3">Mastering Tailwind CSS</h3>
                <p class="text-body text-white/70 mb-4">
                    A comprehensive guide to building beautiful, responsive interfaces with Tailwind CSS.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>

            <!-- Sample Article Card 3 -->
            <div class="bear-card p-6">
                <div class="mb-4">
                    <span class="text-caption bg-white/10 px-3 py-1 rounded-full">DevOps</span>
                </div>
                <h3 class="text-subheading mb-3">Deployment Strategies</h3>
                <p class="text-body text-white/70 mb-4">
                    From local development to production: deployment strategies for modern web applications.
                </p>
                <div class="text-caption">Coming Soon</div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the cards
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.bear-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 200);
        });
    });
</script>
@endpush
