<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot>
    
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                <a href="{{ route('create') }}" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                    Create post
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
        @foreach($allPosts as $post)
        <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6 flex items-center gap-6">
            <div class="flex-1">
                <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $post->title }}</h2>
                <p class="text-gray-700 dark:text-gray-300">{{ $post->content }}</p>
                <div class="flex gap-2 mt-4">
                    <a href="{{ route('show', $post->id)}}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600">
                        Show
                    </a>
                    <a href="{{ route('edit', $post->id)}}" class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 dark:bg-yellow-400 dark:hover:bg-yellow-500">
                        Edit
                    </a>
                    <form action="{{ route('destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:bg-red-500 dark:hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @if ($post->image)
            <div class="w-40 h-40 flex-shrink-0">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}" alt="Post Image" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
            @endif
        </div>
        @endforeach
    </div>
</x-app-layout>
