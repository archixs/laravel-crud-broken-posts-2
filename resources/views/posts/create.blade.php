<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Post
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 rounded-lg">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <div>
                        <label for="title" class="block font-medium text-gray-700 dark:text-gray-300">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200">
                    </div>

                    <div>
                        <label for="content" class="block font-medium text-gray-700 dark:text-gray-300">Content</label>
                        <textarea id="content" name="content" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"></textarea>
                    </div>

                    <div>
                        <label for="image" class="block font-medium text-gray-700 dark:text-gray-300">Image</label>
                        <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-900 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600">
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                            Create Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
