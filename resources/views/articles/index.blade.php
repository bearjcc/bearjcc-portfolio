@extends('layouts.app')

@section('title', 'Blog - BearJCC Portfolio')
@section('description', 'Technical articles and insights about web development, design automation, and software engineering.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-24">
        <div class="technical-container">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    Blog & Articles
                </h1>
                <p class="text-technical-subheading max-w-3xl mx-auto">
                    Technical insights, tutorials, and thoughts on web development, design automation, and software engineering.
                </p>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <div class="pb-32">
        <div class="technical-container">
            <div class="technical-section">
                <div class="technical-specification">
                    <form method="GET" action="{{ route('articles.index') }}" class="space-y-6">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-1">
                                <input 
                                    type="text" 
                                    name="q" 
                                    value="{{ $query ?? '' }}"
                                    placeholder="Search articles..." 
                                    class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-white/50 bear-focus"
                                >
                            </div>
                            <button type="submit" class="bear-button px-8">
                                Search
                            </button>
                        </div>
                        
                        @if($query || $tag)
                            <div class="flex items-center gap-3 text-specification">
                                @if($query)
                                    <span>Search results for: <strong>"{{ $query }}"</strong></span>
                                @endif
                                @if($tag)
                                    <span>Tag: <strong>"{{ $tag }}"</strong></span>
                                @endif
                                <a href="{{ route('articles.index') }}" class="text-bear-gold hover:text-white transition-colors">
                                    Clear filters
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>

            <!-- Articles Content -->
            @if(empty($articles))
                <div class="technical-section">
                    <div class="technical-specification text-center">
                        <div class="mb-12">
                            <svg class="w-16 h-16 mx-auto text-white/60 mb-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-technical-heading mb-8">
                            @if($query)
                                No articles found for "{{ $query }}"
                            @elseif($tag)
                                No articles found for tag "{{ $tag }}"
                            @else
                                Coming Soon
                            @endif
                        </h3>
                        <p class="text-specification mb-12 max-w-3xl mx-auto">
                            @if($query || $tag)
                                Try adjusting your search terms or browse all articles.
                            @else
                                I'm working on creating technical articles and tutorials. Check back soon for content about 
                                web development, design automation, and software engineering.
                            @endif
                        </p>
                        @if($query || $tag)
                            <a href="{{ route('articles.index') }}" class="bear-button">
                                View All Articles
                            </a>
                        @endif
                    </div>
                </div>
            @else
                <!-- Articles Grid -->
                <div class="technical-section">
                    <div class="technical-section-header">
                        <h2 class="text-technical-heading text-center">Latest Articles</h2>
                    </div>
                    <div class="technical-grid">
                        @foreach($articles as $article)
                            <article class="technical-card">
                                @if($article['image'])
                                    <div class="mb-4">
                                        <img src="{{ asset('images/articles/' . $article['image']) }}" 
                                             alt="{{ $article['title'] }}" 
                                             class="w-full h-40 object-cover rounded">
                                    </div>
                                @endif
                                
                                <div class="mb-4">
                                    @foreach($article['tags'] as $tag)
                                        <span class="px-2 py-1 bg-white/10 rounded text-xs mr-2 mb-2 inline-block">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                                
                                <h3 class="text-technical-subheading mb-4">
                                    <a href="{{ route('articles.show', $article['slug']) }}" 
                                       class="hover:text-bear-gold transition-colors">
                                        {{ $article['title'] }}
                                    </a>
                                </h3>
                                
                                <p class="text-specification mb-4">
                                    {{ $article['excerpt'] }}
                                </p>
                                
                                <div class="flex items-center justify-between text-sm text-white/50">
                                    <span>{{ \Carbon\Carbon::parse($article['date'])->format('M j, Y') }}</span>
                                    <a href="{{ route('articles.show', $article['slug']) }}" 
                                       class="text-bear-gold hover:text-white transition-colors">
                                        Read More →
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the articles
    document.addEventListener('DOMContentLoaded', function() {
        const articles = document.querySelectorAll('.technical-card');
        articles.forEach((article, index) => {
            article.style.opacity = '0';
            article.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                article.style.transition = 'all 0.6s ease';
                article.style.opacity = '1';
                article.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>
@endpush
