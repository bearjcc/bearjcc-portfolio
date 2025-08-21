@extends('layouts.app')

@section('title', $article['title'] . ' - BearJCC Portfolio')
@section('description', $article['description'])

@section('content')
<div class="min-h-screen">
    <!-- Article Header -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4">
            <div class="mb-8">
                <a href="{{ route('articles.index') }}" class="text-bear-gold hover:text-white transition-colors text-body">
                    ← Back to Articles
                </a>
            </div>
            
            <header class="mb-8">
                <div class="mb-6">
                    @foreach($article['tags'] as $tag)
                        <span class="text-caption bg-white/10 px-3 py-1 rounded-full mr-2 mb-2 inline-block">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
                
                <h1 class="text-hero mb-4 bear-text-glow">
                    {{ $article['title'] }}
                </h1>
                
                @if($article['description'])
                    <p class="text-body-large text-white/80 mb-6">
                        {{ $article['description'] }}
                    </p>
                @endif
                
                <div class="flex items-center text-caption text-white/50">
                    <span>{{ \Carbon\Carbon::parse($article['date'])->format('F j, Y') }}</span>
                    @if(!empty($article['tags']))
                        <span class="mx-2">•</span>
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
    <section class="max-w-4xl mx-auto px-4 pb-20">
        <div class="bear-card-elevated p-8">
            <article class="prose prose-invert prose-lg max-w-none">
                <div class="markdown-content">
                    {!! $article['content'] !!}
                </div>
            </article>
        </div>
        
        <!-- Related Articles -->
        @if(!empty($relatedArticles))
            <div class="mt-16">
                <h2 class="text-heading mb-8">Related Articles</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $related)
                        <article class="bear-card p-6">
                            <div class="mb-3">
                                @foreach($related['tags'] as $tag)
                                    <span class="text-caption bg-white/10 px-2 py-1 rounded-full mr-2 mb-2 inline-block">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                            
                            <h3 class="text-subheading mb-3">
                                <a href="{{ route('articles.show', $related['slug']) }}" 
                                   class="hover:text-bear-gold transition-colors">
                                    {{ $related['title'] }}
                                </a>
                            </h3>
                            
                            <p class="text-body text-white/70 mb-4">
                                {{ $related['excerpt'] }}
                            </p>
                            
                            <div class="text-caption text-white/50">
                                {{ \Carbon\Carbon::parse($related['date'])->format('M j, Y') }}
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
</div>
@endsection

@push('styles')
<style>
    /* Markdown Content Styling */
    .markdown-content {
        @apply text-body text-white/90;
    }
    
    .markdown-content h1,
    .markdown-content h2,
    .markdown-content h3,
    .markdown-content h4,
    .markdown-content h5,
    .markdown-content h6 {
        @apply text-white font-bold mb-4 mt-8;
    }
    
    .markdown-content h1 { @apply text-heading; }
    .markdown-content h2 { @apply text-heading; }
    .markdown-content h3 { @apply text-subheading; }
    .markdown-content h4 { @apply text-subheading; }
    .markdown-content h5 { @apply text-body font-semibold; }
    .markdown-content h6 { @apply text-body font-semibold; }
    
    .markdown-content p {
        @apply mb-4 leading-relaxed;
    }
    
    .markdown-content ul,
    .markdown-content ol {
        @apply mb-4 pl-6;
    }
    
    .markdown-content li {
        @apply mb-2;
    }
    
    .markdown-content ul li {
        @apply list-disc;
    }
    
    .markdown-content ol li {
        @apply list-decimal;
    }
    
    .markdown-content blockquote {
        @apply border-l-4 border-bear-gold pl-4 py-2 mb-4 bg-white/5 rounded-r-lg;
    }
    
    .markdown-content code {
        @apply bg-white/10 px-2 py-1 rounded text-sm font-mono text-bear-gold;
    }
    
    .markdown-content pre {
        @apply bg-white/5 p-4 rounded-lg mb-4 overflow-x-auto;
    }
    
    .markdown-content pre code {
        @apply bg-transparent p-0 text-white/90;
    }
    
    .markdown-content a {
        @apply text-bear-gold hover:text-white transition-colors underline;
    }
    
    .markdown-content img {
        @apply max-w-full h-auto rounded-lg my-4;
    }
    
    .markdown-content table {
        @apply w-full border-collapse mb-4;
    }
    
    .markdown-content th,
    .markdown-content td {
        @apply border border-white/20 px-4 py-2 text-left;
    }
    
    .markdown-content th {
        @apply bg-white/10 font-semibold;
    }
    
    /* Mermaid Diagram Styling */
    .mermaid {
        @apply my-6 text-center;
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
        const article = document.querySelector('.bear-card-elevated');
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
