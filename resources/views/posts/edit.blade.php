<x-app-layout>
    <h1>Edit post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

    <form action="{{ route('update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <label for="image">Image:</label>
        <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}" style="width: 200px; height: auto;">
        <br>
        <input type="file" name="image" id="image">
        <br>
        <input type="submit" value="Update">
    </form>
</x-app-layout>
