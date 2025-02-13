<x-app-layout>
    <h1>All posts</h1>
    <a href="{{ route('create') }}">Create post</a>
    <ul>
        @foreach($allPosts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('show', $post->id)}}">Show</a>
                    <a href="{{ route('edit', $post->id)}}">Edit</a>
                    <form action="{{ route('destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
