@extends('layouts.app')

@section('title', 'Contact - BearJCC')
@section('description', 'Get in touch with BearJCC for web development projects, technical consultation, or collaboration opportunities.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20 fade-in">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 bear-text-glow">
                Get In Touch
            </h1>
            <p class="text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                Ready to start your next project? Let's discuss how I can help bring your ideas to life.
            </p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bear-card p-8">
                    <h2 class="text-3xl font-bold mb-6 bear-text-glow">Send a Message</h2>
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-lg">
                            <p class="text-green-300">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-500/20 border border-red-500/30 rounded-lg">
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
                            <label for="name" class="block text-sm font-medium mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" 
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors"
                                   placeholder="Your name" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors"
                                   placeholder="your.email@example.com" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                   class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors"
                                   placeholder="What's this about?" required>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" 
                                      class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:border-white/40 transition-colors resize-none"
                                      placeholder="Tell me about your project or how I can help..." required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full bear-button">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bear-card p-8">
                        <h2 class="text-3xl font-bold mb-6 bear-text-glow">Contact Information</h2>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold mb-1">Email</h3>
                                    <p class="text-white/80">hello@bearjcc.com</p>
                                    <p class="text-white/60 text-sm">I'll respond within 24 hours</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold mb-1">Location</h3>
                                    <p class="text-white/80">Remote / Worldwide</p>
                                    <p class="text-white/60 text-sm">Available for remote work</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold mb-1">Response Time</h3>
                                    <p class="text-white/80">Within 24 hours</p>
                                    <p class="text-white/60 text-sm">Usually much faster</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Offered -->
                    <div class="bear-card p-8">
                        <h2 class="text-2xl font-bold mb-6 bear-text-glow">Services I Offer</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">Web Application Development</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">E-commerce Solutions</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">API Development</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">Technical Consultation</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">Code Review & Optimization</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-white/80">Performance Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-3">What types of projects do you work on?</h3>
                    <p class="text-white/80">I specialize in web applications, e-commerce platforms, APIs, and custom software solutions. I work with both startups and established businesses.</p>
                </div>

                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-3">What is your typical project timeline?</h3>
                    <p class="text-white/80">Project timelines vary depending on complexity. Small projects can take 2-4 weeks, while larger applications may take 2-3 months. I'll provide a detailed timeline during our initial consultation.</p>
                </div>

                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-3">Do you provide ongoing support?</h3>
                    <p class="text-white/80">Yes, I offer ongoing maintenance, updates, and support packages to ensure your application continues to perform optimally after launch.</p>
                </div>

                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-3">What technologies do you use?</h3>
                    <p class="text-white/80">I primarily work with Laravel, Vue.js, Tailwind CSS, and modern JavaScript. I also have experience with other frameworks and can recommend the best technology stack for your project.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
