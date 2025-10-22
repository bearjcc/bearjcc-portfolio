@extends('layouts.app')

@section('title', $article['title'] . ' - BearJCC Portfolio')
@section('description', $article['description'])

@section('content')
<div class="min-h-screen">
    <!-- Article Header -->
    <section class="py-24">
        <div class="technical-container">
            <div class="mb-8">
                <a href="{{ route('articles.index') }}" class="text-bear-gold hover:text-white transition-colors text-specification">
                    ← Back to Articles
                </a>
            </div>
            
            <header class="mb-8">
                <div class="mb-6">
                    @foreach($article['tags'] as $tag)
                        <span class="px-2 py-1 bg-white/10 rounded text-xs mr-2 mb-2 inline-block">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold mb-6 bear-text-glow">
                    {{ $article['title'] }}
                </h1>
                
                @if($article['description'])
                    <p class="text-technical-subheading mb-6">
                        {{ $article['description'] }}
                    </p>
                @endif
                
                <div class="flex items-center text-sm text-white/50">
                    <span>{{ \Carbon\Carbon::parse($article['date'])->format('F j, Y') }}</span>
                    @if(!empty($article['tags']))
                        <span class="mx-3">•</span>
                        <span>{{ count($article['tags']) }} tag{{ count($article['tags']) !== 1 ? 's' : '' }}</span>
                    @endif
                </div>
            </header>
            
            @if($article['image'])
                <div class="mb-8">
                    <img src="{{ asset('images/articles/' . $article['image']) }}" 
                         alt="{{ $article['title'] }}" 
                         class="w-full h-64 md:h-96 object-cover rounded-lg">
                </div>
            @endif
        </div>
    </section>

    <!-- Article Content -->
    <div class="pb-32">
        <div class="technical-container">
            <div class="technical-specification">
                <article class="prose prose-invert prose-lg max-w-none">
                    <div class="markdown-content">
                        {!! $article['content'] !!}
                    </div>
                </article>
            </div>
            
            <!-- Related Articles -->
            @if(!empty($relatedArticles))
                <div class="technical-section">
                    <div class="technical-section-header">
                        <h2 class="text-technical-heading">Related Articles</h2>
                    </div>
                    <div class="technical-grid">
                        @foreach($relatedArticles as $related)
                            <article class="technical-card">
                                <div class="mb-4">
                                    @foreach($related['tags'] as $tag)
                                        <span class="px-2 py-1 bg-white/10 rounded text-xs mr-2 mb-2 inline-block">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                                
                                <h3 class="text-technical-subheading mb-4">
                                    <a href="{{ route('articles.show', $related['slug']) }}" 
                                       class="hover:text-bear-gold transition-colors">
                                        {{ $related['title'] }}
                                    </a>
                                </h3>
                                
                                <p class="text-specification mb-4">
                                    {{ $related['excerpt'] }}
                                </p>
                                
                                <div class="text-sm text-white/50">
                                    {{ \Carbon\Carbon::parse($related['date'])->format('M j, Y') }}
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

@push('styles')
<style>
    /* Markdown Content Styling */
    .markdown-content {
        @apply text-specification;
    }
    
    .markdown-content h1,
    .markdown-content h2,
    .markdown-content h3,
    .markdown-content h4,
    .markdown-content h5,
    .markdown-content h6 {
        @apply text-white font-bold mb-6 mt-12;
    }
    
    .markdown-content h1 { @apply text-technical-heading; }
    .markdown-content h2 { @apply text-technical-heading; }
    .markdown-content h3 { @apply text-technical-subheading; }
    .markdown-content h4 { @apply text-technical-subheading; }
    .markdown-content h5 { @apply text-specification font-semibold; }
    .markdown-content h6 { @apply text-specification font-semibold; }
    
    .markdown-content p {
        @apply mb-6 leading-relaxed;
    }
    
    .markdown-content ul,
    .markdown-content ol {
        @apply mb-6 pl-8;
    }
    
    .markdown-content li {
        @apply mb-3;
    }
    
    .markdown-content ul li {
        @apply list-disc;
    }
    
    .markdown-content ol li {
        @apply list-decimal;
    }
    
    .markdown-content blockquote {
        @apply border-l-4 border-bear-gold pl-6 py-4 mb-6 bg-white/5 rounded-r-lg;
    }
    
    .markdown-content code {
        @apply bg-white/10 px-3 py-1 rounded text-sm font-mono text-bear-gold;
    }
    
    .markdown-content pre {
        @apply bg-white/5 p-6 rounded-lg mb-6 overflow-x-auto;
    }
    
    .markdown-content pre code {
        @apply bg-transparent p-0 text-white/90;
    }
    
    .markdown-content a {
        @apply text-bear-gold hover:text-white transition-colors underline;
    }
    
    .markdown-content img {
        @apply max-w-full h-auto rounded-lg my-6;
    }
    
    .markdown-content table {
        @apply w-full border-collapse mb-6;
    }
    
    .markdown-content th,
    .markdown-content td {
        @apply border border-white/20 px-6 py-4 text-left;
    }
    
    .markdown-content th {
        @apply bg-white/10 font-semibold;
    }
    
    /* Mermaid Diagram Styling */
    .mermaid {
        @apply my-8 text-center;
    }
    
    .mermaid svg {
        @apply max-w-full h-auto;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/mermaid@10.6.1/dist/mermaid.min.js"></script>
<script>
    // Initialize Mermaid diagrams
    mermaid.initialize({
        startOnLoad: true,
        theme: 'dark',
        themeVariables: {
            primaryColor: '#002d58',
            primaryTextColor: '#ffffff',
            primaryBorderColor: '#ffffff',
            lineColor: '#ffffff',
            secondaryColor: '#1a1a1a',
            tertiaryColor: '#333333'
        }
    });
    
    // Add fade-in animations
    document.addEventListener('DOMContentLoaded', function() {
        const article = document.querySelector('.technical-specification');
        if (article) {
            article.style.opacity = '0';
            article.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                article.style.transition = 'all 0.6s ease';
                article.style.opacity = '1';
                article.style.transform = 'translateY(0)';
            }, 200);
        }
    });
</script>
@endpush
