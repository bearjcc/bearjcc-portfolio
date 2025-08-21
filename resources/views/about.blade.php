@extends('layouts.app')

@section('title', 'About - BearJCC Portfolio')
@section('description', 'Learn about Joseph C. Caswell - Design Automation Specialist, Technical Solutions Developer, and full-stack web developer with expertise in DriveWorks, SOLIDWORKS, and modern web technologies.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-hero mb-6 bear-text-glow">
                About Joseph C. Caswell
            </h1>
            <p class="text-body-large text-white/80 max-w-3xl mx-auto">
                Design Automation Specialist and Technical Solutions Developer with over a decade of experience 
                spearheading innovative manufacturing software solutions and process optimization.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="max-w-6xl mx-auto px-4 pb-20">
        <!-- Professional Summary -->
        <div class="bear-card-elevated p-8 mb-12">
            <h2 class="text-heading mb-6">Who I Am</h2>
            <p class="text-body text-white/80 mb-6">
                I'm a highly accomplished and results-driven professional based in Whangārei, New Zealand, 
                with deep expertise in DriveWorks and SOLIDWORKS, combined with robust full-stack web development 
                and UI/UX design. I create powerful, user-centric automation tools that transform complex 
                manufacturing processes into streamlined, efficient workflows.
            </p>
            <p class="text-body text-white/80">
                My passion lies in continuously learning and enabling efficiency through automation, 
                whether that's developing DriveWorks plugins that achieve 7,000x performance improvements, 
                optimizing manufacturing processes to reduce design time by 70-95%, or building modern 
                web applications that enhance user experiences.
            </p>
        </div>

        <!-- Key Accomplishments -->
        <div class="mb-12">
            <h2 class="text-heading mb-8 text-center">Key Accomplishments</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">DriveWorks Plugin Development</h3>
                    <p class="text-body text-white/70">
                        Pioneered a revolutionary DriveWorks plugin for dynamic icon integration, transforming 
                        a cumbersome manual process into a single-file solution granting instant access to 14,000+ 
                        customizable SVG icons. Achieved a 7,000x performance boost by rewriting the plugin to 
                        embed SVGs directly.
                    </p>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">DriveWorks UI/UX Innovation</h3>
                    <p class="text-body text-white/70">
                        Pioneered and championed web-standard UI/UX design principles in DriveWorks projects, 
                        leading to significantly boosted user adoption and minimized training needs. 
                        Presented this approach at DriveWorks World 2024.
                    </p>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Manufacturing Process Optimization</h3>
                    <p class="text-body text-white/70">
                        Created SOLIDWORKS assembly and drawings templates for common automotive fixtures 
                        reducing design time from 70-95%. Pioneered a new FEA role developing foam flow 
                        analysis procedures with custom scripts for realtime updates.
                    </p>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Enterprise Knowledge Platform</h3>
                    <p class="text-body text-white/70">
                        Established and administered a self-hosted Wiki.js knowledge base, serving as primary 
                        content author. Pioneered AI-assisted article writing process and converted the knowledge 
                        base into a RAG system for AI-powered Q&A.
                    </p>
                </div>
            </div>
        </div>

        <!-- Skills & Technologies -->
        <div class="mb-12">
            <h2 class="text-heading mb-8 text-center">Skills & Technologies</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Design Automation</h3>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• DriveWorks (Professional, Solo, Xpress)</li>
                        <li>• SOLIDWORKS (CSWE Certified)</li>
                        <li>• 3DEXPERIENCE Platform</li>
                        <li>• FEA & Simulation</li>
                        <li>• Manufacturing Process Optimization</li>
                    </ul>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Web Development</h3>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• Full-Stack Development</li>
                        <li>• HTML, CSS, JavaScript, TypeScript</li>
                        <li>• PHP, Node.js, Laravel</li>
                        <li>• UI/UX Design</li>
                        <li>• Responsive Web Design</li>
                    </ul>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Tools & Platforms</h3>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• Git/GitHub, VSCode/Cursor</li>
                        <li>• IIS, Azure, Railway</li>
                        <li>• Wiki.js, OpenWebUI</li>
                        <li>• Figma, GIMP</li>
                        <li>• Microsoft 365, Google Drive</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Professional Experience -->
        <div class="mb-12">
            <h2 class="text-heading mb-8 text-center">Professional Experience</h2>
            <div class="space-y-8">
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div>
                            <h3 class="text-subheading text-bear-gold">Technical Solutions Consultant</h3>
                            <p class="text-caption">TPM • Greenville, SC, USA • Oct 2021 - Present</p>
                        </div>
                        <span class="text-caption bg-white/10 px-3 py-1 rounded-full mt-2 md:mt-0">Current</span>
                    </div>
                    <p class="text-body text-white/70 mb-4">
                        Engineering Consultancy including SOLIDWORKS and DriveWorks VAR
                    </p>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• Served as Tier 2 SOLIDWORKS Technical Support specialist</li>
                        <li>• Functioned as SOLIDWORKS instructor and consultant</li>
                        <li>• Provided expert Technical Solutions Consulting for DriveWorks implementations</li>
                        <li>• Led internal tool and template development initiatives</li>
                        <li>• Maintained and troubleshot IIS and VM environments</li>
                    </ul>
                </div>
                
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div>
                            <h3 class="text-subheading text-bear-gold">Tool Designer</h3>
                            <p class="text-caption">Kearfott Corporation • Black Mountain, NC, USA • Mar 2021 – Oct 2021</p>
                        </div>
                    </div>
                    <p class="text-body text-white/70 mb-4">
                        Tier 2 US Department of Defense Contractor
                    </p>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• Designed, modeled, and drafted specialized tools using SOLIDWORKS</li>
                        <li>• Collaborated with CNC programmers and machinists for precision manufacturing</li>
                    </ul>
                </div>
                
                <div class="bear-card p-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div>
                            <h3 class="text-subheading text-bear-gold">Tool Designer</h3>
                            <p class="text-caption">Auria Solutions • Old Fort, NC, USA • Oct 2017 – Mar 2021</p>
                        </div>
                    </div>
                    <p class="text-body text-white/70 mb-4">
                        Global Tier 1 Automotive Supplier
                    </p>
                    <ul class="space-y-2 text-body text-white/70">
                        <li>• Undertook design, modeling, drafting, simulating, and purchasing for automotive manufacturing tools</li>
                        <li>• Specialized in complex SOLIDWORKS Assemblies and Drawings</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Eagle Scout Project -->
        <div class="mb-12">
            <h2 class="text-heading mb-8 text-center">Eagle Scout Project</h2>
            <div class="bear-card-elevated p-8">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-subheading text-bear-gold mb-4">Leadership & Community Service</h3>
                        <p class="text-body text-white/70 mb-6">
                            As an Eagle Scout, I demonstrated exceptional leadership skills by planning, organizing, and executing 
                            a community service project that benefited my local community. This achievement represents the highest 
                            rank in Boy Scouts and showcases my ability to lead teams, manage complex projects, and make a 
                            positive impact in my community.
                        </p>
                        <div class="aspect-video w-full max-w-2xl mx-auto">
                            <iframe 
                                width="100%" 
                                height="100%" 
                                src="https://www.youtube.com/embed/V7WxxTyeoNY?si=2WUugOPD_svK_qWU" 
                                title="Eagle Scout Project Video" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen
                                class="rounded-lg">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education & Certifications -->
        <div class="mb-12">
            <h2 class="text-heading mb-8 text-center">Education & Certifications</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Education</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-body font-semibold">Coursework toward B.E. Mechatronics Engineering</p>
                            <p class="text-caption">UNC Asheville / NC State University Joint Program • 2015–2017</p>
                        </div>
                        <div>
                            <p class="text-body font-semibold">Coursework toward A.S. Mechanical Engineering</p>
                            <p class="text-caption">Wake Technical Community College • 2012–2015</p>
                        </div>
                    </div>
                </div>
                
                <div class="bear-card p-6">
                    <h3 class="text-subheading mb-4 text-bear-gold">Professional Certifications</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-body font-semibold">DriveWorks</p>
                            <p class="text-caption">Professional, Solo, Xpress (2022-2023)</p>
                        </div>
                        <div>
                            <p class="text-body font-semibold">SOLIDWORKS</p>
                            <p class="text-caption">Certified SOLIDWORKS Expert (CSWE) • CSWP + Drawing Tools/Weldments/Surfacing/Sheet Metal</p>
                        </div>
                        <div>
                            <p class="text-body font-semibold">Web Development</p>
                            <p class="text-caption">W3Schools: HTML, CSS, JavaScript, TypeScript, XML, PHP, Node.js</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact & Resume -->
        <div class="bear-card-elevated p-8 text-center">
            <h2 class="text-heading mb-6">Get In Touch</h2>
            <p class="text-body text-white/70 mb-8 max-w-2xl mx-auto">
                I'm always interested in new opportunities and collaborations. Whether you're looking for 
                design automation expertise, web development solutions, or technical consulting, 
                I'd love to hear from you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="{{ route('contact.index') }}" class="bear-button">
                    Contact Me
                </a>
                <a href="{{ asset('downloads/Joseph-Caswell-Resume.pdf') }}" target="_blank" class="bear-button-secondary">
                    Download Resume (PDF)
                </a>
                <a href="{{ asset('downloads/Joseph-Caswell-Resume.html') }}" target="_blank" class="bear-button-secondary">
                    View Resume (HTML)
                </a>
            </div>
            <div class="flex justify-center space-x-6 text-white/60">
                <a href="https://www.linkedin.com/in/bearjcc/" target="_blank" class="hover:text-white transition-colors">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
                <a href="https://github.com/bearjcc" target="_blank" class="hover:text-white transition-colors">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the cards
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.bear-card, .bear-card-elevated');
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
