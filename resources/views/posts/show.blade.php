<x-app-layout>
    <a href="{{ route('index') }}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}" style="width: 400px; height: auto;">
</x-app-layout>
