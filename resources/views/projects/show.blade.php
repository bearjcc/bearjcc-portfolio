@extends('layouts.app')

@section('title', 'Project Details - BearJCC Portfolio')
@section('description', 'Detailed information about this project showcasing technical skills and development process.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    Project Details
                </h1>
                <p class="text-technical-subheading max-w-3xl mx-auto">
                    This is the project detail page. Coming soon with comprehensive project information.
                </p>
            </div>
        </div>
    </section>

    <!-- Project Content -->
    <div class="pb-32">
        <div class="technical-container">
            <div class="technical-specification text-center">
                <div class="mb-12">
                    <svg class="w-24 h-24 mx-auto text-white/60 mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h2 class="text-technical-heading mb-8">Project Details Coming Soon</h2>
                <p class="text-specification mb-12 max-w-3xl mx-auto">
                    I'm currently preparing detailed project pages that will showcase the development process, 
                    technical challenges, and solutions implemented for each project.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('projects.index') }}" class="bear-button">
                        Back to Projects
                    </a>
                    <a href="{{ route('contact.index') }}" class="bear-button-secondary">
                        Discuss Project
                    </a>
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
        const cards = document.querySelectorAll('.bear-card-elevated');
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
