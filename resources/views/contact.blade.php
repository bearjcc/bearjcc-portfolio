@extends('layouts.app')

@section('title', 'Contact - BearJCC')
@section('description', 'Get in touch with BearJCC for web development projects, technical consultation, or collaboration opportunities.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    Get In Touch
                </h1>
                <p class="text-technical-subheading max-w-3xl mx-auto">
                    Ready to start your next project? Let's discuss how I can help bring your ideas to life.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <div class="pb-32">
        <div class="technical-container">
            <div class="technical-grid">
                <!-- Contact Form -->
                <div class="technical-specification">
                    <h2 class="text-technical-heading mb-8">Send a Message</h2>
                    
                    @if(session('success'))
                        <div class="mb-8 p-6 bg-green-500/20 border border-green-500/30 rounded-lg">
                            <p class="text-green-300">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('warning'))
                        <div class="mb-8 p-6 bg-yellow-500/20 border border-yellow-500/30 rounded-lg">
                            <p class="text-yellow-300">{{ session('warning') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-8 p-6 bg-red-500/20 border border-red-500/30 rounded-lg">
                            <ul class="text-red-300">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-specification font-semibold mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors bear-focus"
                                   placeholder="Your name" required>
                        </div>

                        <div>
                            <label for="email" class="block text-specification font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors bear-focus"
                                   placeholder="your.email@example.com" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-specification font-semibold mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors bear-focus"
                                   placeholder="What's this about?" required>
                        </div>

                        <div>
                            <label for="message" class="block text-specification font-semibold mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" 
                                      class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors resize-none bear-focus"
                                      placeholder="Tell me about your project or how I can help..." required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full bear-button">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="technical-specification">
                        <h2 class="text-technical-heading mb-8">Contact Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-technical-subheading mb-2">Email</h3>
                                    <p class="text-specification">hello@bearjcc.com</p>
                                    <p class="text-sm text-white/60">I'll respond within 24 hours</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-technical-subheading mb-2">Location</h3>
                                    <p class="text-specification">Remote / Worldwide</p>
                                    <p class="text-sm text-white/60">Available for remote work</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-technical-subheading mb-2">Response Time</h3>
                                    <p class="text-specification">Within 24 hours</p>
                                    <p class="text-sm text-white/60">Usually much faster</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Offered -->
                    <div class="technical-specification">
                        <h2 class="text-technical-subheading mb-6">Services I Offer</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">Web Application Development</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">E-commerce Solutions</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">API Development</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">Technical Consultation</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">Code Review & Optimization</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-specification">Performance Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="pb-32">
        <div class="technical-container">
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading text-center">
                        Frequently Asked Questions
                    </h2>
                </div>
                <div class="technical-grid">
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">What types of projects do you work on?</h3>
                        <p class="text-specification">I specialize in web applications, e-commerce platforms, APIs, and custom software solutions. I work with both startups and established businesses.</p>
                    </div>

                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">What is your typical project timeline?</h3>
                        <p class="text-specification">Project timelines vary depending on complexity. Small projects can take 2-4 weeks, while larger applications may take 2-3 months. I'll provide a detailed timeline during our initial consultation.</p>
                    </div>

                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">Do you provide ongoing support?</h3>
                        <p class="text-specification">Yes, I offer ongoing maintenance, updates, and support packages to ensure your application continues to perform optimally after launch.</p>
                    </div>

                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">What technologies do you use?</h3>
                        <p class="text-specification">I primarily work with Laravel, Vue.js, Tailwind CSS, and modern JavaScript. I also have experience with other frameworks and can recommend the best technology stack for your project.</p>
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
            }, index * 200);
        });
    });
</script>
@endpush
