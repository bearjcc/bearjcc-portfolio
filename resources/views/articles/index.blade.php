@extends('layouts.app')

@section('title', 'Blog - BearJCC Portfolio')
@section('description', 'Technical articles and insights about web development, design automation, and software engineering.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="text-center py-20">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-hero mb-6 bear-text-glow">
                Blog & Articles
            </h1>
            <p class="text-body-large text-white/80 max-w-2xl mx-auto">
                Technical insights, tutorials, and thoughts on web development, design automation, and software engineering.
            </p>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="max-w-4xl mx-auto px-4 mb-12">
        <div class="bear-card-elevated p-6">
            <form method="GET" action="{{ route('articles.index') }}" class="space-y-4">
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
                    <div class="flex items-center gap-2 text-body text-white/70">
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
    </section>

    <!-- Articles Content -->
    <section class="max-w-6xl mx-auto px-4 pb-20">
        @if(empty($articles))
            <div class="text-center py-20">
                <div class="mb-6">
                    <svg class="w-16 h-16 mx-auto text-white/60 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-subheading mb-4">
                    @if($query)
                        No articles found for "{{ $query }}"
                    @elseif($tag)
                        No articles found for tag "{{ $tag }}"
                    @else
                        Coming Soon
                    @endif
                </h3>
                <p class="text-body text-white/70 mb-8 max-w-2xl mx-auto">
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
        @else
            <!-- Articles Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($articles as $article)
                    <article class="bear-card-elevated p-6 hover:transform hover:scale-105 transition-all duration-300">
                        @if($article['image'])
                            <div class="mb-4">
                                <img src="{{ asset('images/articles/' . $article['image']) }}" 
                                     alt="{{ $article['title'] }}" 
                                     class="w-full h-48 object-cover rounded-lg">
                            </div>
                        @endif
                        
                        <div class="mb-4">
                            @foreach($article['tags'] as $tag)
                                <span class="text-caption bg-white/10 px-2 py-1 rounded-full mr-2 mb-2 inline-block">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                        
                        <h3 class="text-subheading mb-3">
                            <a href="{{ route('articles.show', $article['slug']) }}" 
                               class="hover:text-bear-gold transition-colors">
                                {{ $article['title'] }}
                            </a>
                        </h3>
                        
                        <p class="text-body text-white/70 mb-4">
                            {{ $article['excerpt'] }}
                        </p>
                        
                        <div class="flex items-center justify-between text-caption text-white/50">
                            <span>{{ \Carbon\Carbon::parse($article['date'])->format('M j, Y') }}</span>
                            <a href="{{ route('articles.show', $article['slug']) }}" 
                               class="text-bear-gold hover:text-white transition-colors">
                                Read More →
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Add fade-in animations for the articles
    document.addEventListener('DOMContentLoaded', function() {
        const articles = document.querySelectorAll('.bear-card-elevated');
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
