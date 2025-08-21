@extends('layouts.app')

@section('title', 'About - BearJCC')
@section('description', 'Learn more about BearJCC, a professional web developer specializing in Laravel, Vue.js, and modern web technologies.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20 fade-in">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 bear-text-glow">
                About BearJCC
            </h1>
            <p class="text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                Professional web developer passionate about creating elegant solutions
            </p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto">
            <div class="bear-card p-8">
                <h2 class="text-3xl font-bold mb-6 bear-text-glow">Who I Am</h2>
                <p class="text-lg text-white/80 mb-6">
                    I'm a dedicated web developer with a passion for creating beautiful, functional, and user-friendly web applications. 
                    With years of experience in modern web technologies, I specialize in building robust solutions that solve real-world problems.
                </p>
                <p class="text-lg text-white/80 mb-6">
                    My approach combines technical expertise with creative problem-solving, ensuring that every project I work on 
                    not only meets functional requirements but also delivers an exceptional user experience.
                </p>
                <p class="text-lg text-white/80">
                    When I'm not coding, you can find me writing technical articles, contributing to open-source projects, 
                    or exploring new technologies to stay at the forefront of web development.
                </p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-16 fade-in">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Skills & Technologies
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Backend Development -->
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-4">Backend Development</h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <span>Laravel</span>
                            <span class="text-white/60">Expert</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>PHP</span>
                            <span class="text-white/60">Advanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>MySQL</span>
                            <span class="text-white/60">Advanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Node.js</span>
                            <span class="text-white/60">Intermediate</span>
                        </div>
                    </div>
                </div>

                <!-- Frontend Development -->
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-4">Frontend Development</h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <span>Vue.js</span>
                            <span class="text-white/60">Advanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>JavaScript</span>
                            <span class="text-white/60">Expert</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Tailwind CSS</span>
                            <span class="text-white/60">Advanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>HTML/CSS</span>
                            <span class="text-white/60">Expert</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & DevOps -->
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-4">Tools & DevOps</h3>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <span>Git</span>
                            <span class="text-white/60">Expert</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Docker</span>
                            <span class="text-white/60">Intermediate</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>Linux</span>
                            <span class="text-white/60">Advanced</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span>AWS</span>
                            <span class="text-white/60">Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Professional Experience
            </h2>
            <div class="space-y-8">
                <!-- Experience Item 1 -->
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <h3 class="text-xl font-bold">Senior Web Developer</h3>
                        <span class="text-white/60">2022 - Present</span>
                    </div>
                    <p class="text-white/80 mb-4">
                        Leading development of enterprise web applications using Laravel and Vue.js. 
                        Mentoring junior developers and implementing best practices across the team.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">Docker</span>
                    </div>
                </div>

                <!-- Experience Item 2 -->
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <h3 class="text-xl font-bold">Full Stack Developer</h3>
                        <span class="text-white/60">2020 - 2022</span>
                    </div>
                    <p class="text-white/80 mb-4">
                        Developed and maintained multiple web applications, focusing on e-commerce platforms 
                        and content management systems.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">WordPress</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">WooCommerce</span>
                    </div>
                </div>

                <!-- Experience Item 3 -->
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <h3 class="text-xl font-bold">Junior Developer</h3>
                        <span class="text-white/60">2018 - 2020</span>
                    </div>
                    <p class="text-white/80 mb-4">
                        Started my professional journey building responsive websites and learning modern 
                        web development practices.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">HTML</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">CSS</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">JavaScript</span>
                        <span class="px-3 py-1 bg-white/10 rounded-full text-sm">PHP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 bear-text-glow">
                Education & Certifications
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-2">Bachelor of Computer Science</h3>
                    <p class="text-white/60 mb-2">University of Technology</p>
                    <p class="text-white/80">Graduated with honors, focusing on web development and software engineering principles.</p>
                </div>
                <div class="bear-card p-6">
                    <h3 class="text-xl font-bold mb-2">Laravel Certification</h3>
                    <p class="text-white/60 mb-2">Laravel Official Certification</p>
                    <p class="text-white/80">Certified Laravel developer with expertise in modern PHP development practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-16 fade-in">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 bear-text-glow">
                Let's Work Together
            </h2>
            <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">
                I'm always interested in new opportunities and exciting projects. 
                Whether you need a full website, custom application, or technical consultation, 
                I'd love to hear from you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bear-button">
                    Get In Touch
                </a>
                <a href="{{ route('projects.index') }}" class="bear-button">
                    View My Work
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
