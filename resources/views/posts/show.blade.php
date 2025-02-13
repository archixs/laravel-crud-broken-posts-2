<x-app-layout>
    <a href="{{ route('index') }}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
</x-app-layout>
