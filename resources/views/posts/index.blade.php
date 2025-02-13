<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('create') }}">Create post</a>
                    
                </div>
            </div>
        </div>
    </div>

    <ul>
        @foreach($allPosts as $post)
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <li>
                            <h2 class="font-bold text-2xl">{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <div>
                                <a href="{{ route('show', $post->id)}}" class="btn btn-secondary">Show</a>
                                <a href="{{ route('edit', $post->id)}}">Edit</a>
                                <form action="{{ route('destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>
            
        @endforeach
    </ul>
</x-app-layout>
