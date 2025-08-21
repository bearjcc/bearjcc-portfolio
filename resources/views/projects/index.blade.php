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
        <!-- Featured Projects -->
        <div class="mb-16">
            <h2 class="text-heading mb-8 text-center">Featured Projects</h2>
            
            <!-- Slidev Theme Project -->
            <div class="bear-card-elevated p-8 mb-12">
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-2/3">
                        <div class="mb-4">
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full">Vue.js</span>
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">TypeScript</span>
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Slidev</span>
                        </div>
                        <h3 class="text-heading mb-4">TPM Branded Slidev Theme</h3>
                        <p class="text-body text-white/70 mb-6">
                            A custom presentation theme for Slidev (slides maker for developers) featuring TPM branding and design elements. 
                            This theme provides consistent, professional presentation templates with custom layouts, styling, and branding 
                            for technical presentations and training materials.
                        </p>
                        <div class="space-y-3 mb-6">
                            <h4 class="text-subheading text-bear-gold">Features:</h4>
                            <ul class="space-y-2 text-body text-white/70">
                                <li>• <strong>Custom Layouts</strong> - 15+ specialized slide layouts (cover, center, two-column, image layouts, etc.)</li>
                                <li>• <strong>TPM Branding</strong> - Integrated company logos, colors, and design elements</li>
                                <li>• <strong>Code Highlighting</strong> - Syntax highlighting for multiple programming languages</li>
                                <li>• <strong>Responsive Design</strong> - Optimized for different screen sizes and presentations</li>
                                <li>• <strong>Export Options</strong> - PDF export and web deployment capabilities</li>
                            </ul>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ asset('downloads/slidev-theme-tpm') }}" download class="bear-button">
                                Download Theme
                            </a>
                            <a href="{{ asset('downloads/slidev-theme-tpm/example-export.pdf') }}" target="_blank" class="bear-button-secondary">
                                View Example PDF
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/3">
                        <div class="bg-white/5 p-6 rounded-lg">
                            <h4 class="text-subheading text-bear-gold mb-4">Technical Details</h4>
                            <div class="space-y-3 text-body text-white/70">
                                <div>
                                    <span class="font-semibold">Framework:</span> Vue.js 3 + TypeScript
                                </div>
                                <div>
                                    <span class="font-semibold">Platform:</span> Slidev (Node.js)
                                </div>
                                <div>
                                    <span class="font-semibold">License:</span> Internal (TPM)
                                </div>
                                <div>
                                    <span class="font-semibold">Size:</span> ~2.4MB (with assets)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AutoHotkey Scripts Project -->
            <div class="bear-card-elevated p-8">
                <div class="flex flex-col lg:flex-row gap-8">
                    <div class="lg:w-2/3">
                        <div class="mb-4">
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full">AutoHotkey</span>
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Windows Automation</span>
                            <span class="text-caption bg-white/10 px-3 py-1 rounded-full ml-2">Productivity</span>
                        </div>
                        <h3 class="text-heading mb-4">Windows Productivity Scripts</h3>
                        <p class="text-body text-white/70 mb-6">
                            A collection of AutoHotkey scripts designed to enhance Windows productivity and workflow efficiency. 
                            These scripts automate repetitive tasks, provide quick access to common functions, and improve 
                            the overall user experience on Windows systems.
                        </p>
                        <div class="space-y-3 mb-6">
                            <h4 class="text-subheading text-bear-gold">Scripts Included:</h4>
                            <ul class="space-y-2 text-body text-white/70">
                                <li>• <strong>Media Control.ahk</strong> - Quick media playback controls</li>
                                <li>• <strong>Engineering Symbols.ahk</strong> - Fast insertion of engineering symbols</li>
                                <li>• <strong>Greek Letters.ahk</strong> - Quick typing of Greek alphabet characters</li>
                                <li>• <strong>Hidden Files.ahk</strong> - Toggle hidden file visibility</li>
                                <li>• <strong>Win Scroll Volume.ahk</strong> - Volume control via mouse wheel</li>
                            </ul>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ asset('downloads/Media Control.ahk') }}" download class="bear-button">
                                Download Scripts
                            </a>
                            <a href="{{ route('contact.index') }}" class="bear-button-secondary">
                                Request Custom Script
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/3">
                        <div class="bg-white/5 p-6 rounded-lg">
                            <h4 class="text-subheading text-bear-gold mb-4">Technical Details</h4>
                            <div class="space-y-3 text-body text-white/70">
                                <div>
                                    <span class="font-semibold">Language:</span> AutoHotkey v1.1
                                </div>
                                <div>
                                    <span class="font-semibold">Platform:</span> Windows 10/11
                                </div>
                                <div>
                                    <span class="font-semibold">License:</span> MIT (Free to use)
                                </div>
                                <div>
                                    <span class="font-semibold">Size:</span> ~3KB total
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- More Projects Coming Soon -->
        <div class="mt-16">
            <h2 class="text-heading mb-8 text-center">More Projects Coming Soon</h2>
            <div class="bear-card-elevated p-8 text-center">
                <div class="mb-6">
                    <svg class="w-16 h-16 mx-auto text-white/60 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-subheading mb-4">Portfolio in Development</h3>
                <p class="text-body text-white/70 mb-6 max-w-2xl mx-auto">
                    I'm actively working on documenting and showcasing more of my projects. Each project will include 
                    detailed descriptions, technical challenges, and the development process behind the final product.
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
