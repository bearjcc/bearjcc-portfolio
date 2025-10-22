@extends('layouts.app')

@section('title', 'About BearJCC - Professional Background')
@section('description', 'Learn about BearJCC\'s professional background, technical expertise, and experience in web development and design automation.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    About BearJCC
                </h1>
                <p class="text-technical-subheading max-w-2xl mx-auto">
                    Professional web developer and technical writer with expertise in modern web technologies and design automation solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="pb-32">
        <div class="technical-container">
            <!-- Professional Summary -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading">Professional Summary</h2>
                </div>
                <div class="technical-specification">
                    <p class="text-specification mb-6">
                        I am a passionate web developer with a unique background in tool design and CAD automation. 
                        My experience spans from traditional engineering design to modern web development, 
                        giving me a distinctive perspective on creating efficient, user-friendly solutions.
                    </p>
                    <p class="text-specification">
                        I specialize in bridging the gap between complex technical systems and user accessibility, 
                        creating solutions that are both powerful and intuitive to use.
                    </p>
                </div>
            </div>

            <!-- Technical Expertise -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading">Technical Expertise</h2>
                </div>
                <div class="technical-grid">
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">Web Development</h3>
                        <ul class="space-y-2 text-specification">
                            <li>• Laravel PHP Framework</li>
                            <li>• Vue.js & JavaScript</li>
                            <li>• Tailwind CSS & Modern CSS</li>
                            <li>• MySQL & Database Design</li>
                            <li>• RESTful APIs & Integration</li>
                        </ul>
                    </div>
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">Design Automation</h3>
                        <ul class="space-y-2 text-specification">
                            <li>• SOLIDWORKS CAD Design</li>
                            <li>• DriveWorks Configuration</li>
                            <li>• Process Automation</li>
                            <li>• Technical Documentation</li>
                            <li>• User Interface Design</li>
                        </ul>
                    </div>
                    <div class="technical-card">
                        <h3 class="text-technical-subheading mb-4">Tools & Technologies</h3>
                        <ul class="space-y-2 text-specification">
                            <li>• Git & Version Control</li>
                            <li>• Docker & Containerization</li>
                            <li>• CI/CD Pipelines</li>
                            <li>• Performance Optimization</li>
                            <li>• Testing & Quality Assurance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Professional Experience -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading">Professional Experience</h2>
                </div>
                <div class="space-y-8">
                    <div class="technical-specification">
                        <h3 class="text-technical-subheading mb-3">Senior Web Developer</h3>
                        <p class="text-specification mb-4">
                            Specializing in Laravel development and modern web technologies. 
                            Creating robust, scalable applications with focus on user experience and performance optimization.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Laravel</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Vue.js</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Tailwind CSS</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">MySQL</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">RESTful APIs</span>
                        </div>
                    </div>
                    
                    <div class="technical-specification">
                        <h3 class="text-technical-subheading mb-3">DriveWorks Specialist</h3>
                        <p class="text-specification mb-4">
                            Expert in creating customer-facing DriveWorks configurators and automation solutions. 
                            Bridging the gap between complex CAD systems and user-friendly web interfaces.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">DriveWorks</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">SOLIDWORKS</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Automation</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Web Configurators</span>
                        </div>
                    </div>
                    
                    <div class="technical-specification">
                        <h3 class="text-technical-subheading mb-3">Tool Design Engineer</h3>
                        <p class="text-specification mb-4">
                            Extensive experience in automotive and defense tool design using SOLIDWORKS. 
                            Specialized in creating precise, efficient manufacturing solutions.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">SOLIDWORKS</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Tool Design</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Manufacturing</span>
                            <span class="px-2 py-1 bg-white/10 rounded text-xs">Automotive</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Career Constellation -->
            <div class="technical-section">
                <x-constellation-map 
                    title="Career Constellation" 
                    description="How my career path connects different fields of expertise"
                    :connections="[
                        ['from' => ['x' => 150, 'y' => 100], 'to' => ['x' => 250, 'y' => 80], 'color' => 'rgba(59, 130, 246, 0.6)'],
                        ['from' => ['x' => 250, 'y' => 80], 'to' => ['x' => 350, 'y' => 120], 'color' => 'rgba(59, 130, 246, 0.6)'],
                        ['from' => ['x' => 350, 'y' => 120], 'to' => ['x' => 450, 'y' => 100], 'color' => 'rgba(59, 130, 246, 0.6)'],
                        ['from' => ['x' => 450, 'y' => 100], 'to' => ['x' => 550, 'y' => 140], 'color' => 'rgba(59, 130, 246, 0.6)'],
                        ['from' => ['x' => 550, 'y' => 140], 'to' => ['x' => 650, 'y' => 120], 'color' => 'rgba(59, 130, 246, 0.6)'],
                        ['from' => ['x' => 150, 'y' => 100], 'to' => ['x' => 550, 'y' => 140], 'color' => 'rgba(59, 130, 246, 0.3)', 'width' => '1'],
                        ['from' => ['x' => 250, 'y' => 80], 'to' => ['x' => 650, 'y' => 120], 'color' => 'rgba(59, 130, 246, 0.3)', 'width' => '1'],
                    ]"
                >
                    <x-constellation-node 
                        title="Tool Design" 
                        description="SOLIDWORKS CAD Design"
                        color="red"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'></path>"
                    />
                    <x-constellation-node 
                        title="Automation" 
                        description="DriveWorks Configuration"
                        color="green"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 10V3L4 14h7v7l9-11h-7z'></path>"
                    />
                    <x-constellation-node 
                        title="Programming" 
                        description="Full-Stack Development"
                        color="yellow"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'></path>"
                    />
                    <x-constellation-node 
                        title="Web Development" 
                        description="Laravel & Modern Web"
                        color="blue"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'></path>"
                    />
                    <x-constellation-node 
                        title="UI/UX Design" 
                        description="User-Centered Design"
                        color="purple"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z'></path>"
                    />
                    <x-constellation-node 
                        title="Documentation" 
                        description="Technical Writing"
                        color="indigo"
                        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'></path>"
                    />
                </x-constellation-map>
            </div>

            <!-- Technical Philosophy -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading">Technical Philosophy</h2>
                </div>
                <div class="technical-specification">
                    <p class="text-specification mb-6">
                        My approach combines engineering precision with modern web development practices. 
                        I believe in creating solutions that are not only technically sound but also 
                        accessible and user-friendly.
                    </p>
                    <div class="technical-grid">
                        <div class="technical-card">
                            <h4 class="font-semibold text-white mb-2">Precision Engineering</h4>
                            <p class="text-specification text-sm">
                                Every component serves a purpose, every line of code has meaning.
                            </p>
                        </div>
                        <div class="technical-card">
                            <h4 class="font-semibold text-white mb-2">User-Centric Design</h4>
                            <p class="text-specification text-sm">
                                Complex technical solutions made accessible and intuitive.
                            </p>
                        </div>
                        <div class="technical-card">
                            <h4 class="font-semibold text-white mb-2">Performance Focus</h4>
                            <p class="text-specification text-sm">
                                Optimized solutions that deliver results efficiently.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="technical-section">
                <div class="technical-section-header">
                    <h2 class="text-technical-heading">Get In Touch</h2>
                </div>
                <div class="technical-specification">
                    <p class="text-specification mb-6">
                        I'm always interested in discussing new opportunities, technical challenges, 
                        and collaborative projects. Let's connect and explore how we can work together.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact.index') }}" class="bear-button">
                            Contact Me
                        </a>
                        <a href="{{ route('projects.index') }}" class="bear-button-secondary">
                            View Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
