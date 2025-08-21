<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - BearJCC Portfolio</title>
</head>
<body>
    <h1>Blog</h1>
    <p>This is the blog page. Coming soon with technical articles.</p>
    
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('projects.index') }}">Projects</a></li>
            <li><a href="{{ route('articles.index') }}">Blog</a></li>
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
    </nav>
</body>
</html>
