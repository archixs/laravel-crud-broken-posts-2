<x-app-layout>
    <h1>Create post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <label for="image">image:</label>
        <input type="file" id="image" name="image">
        <br>
        <input type="submit" value="Create">
        
    </form>
</x-app-layout>
