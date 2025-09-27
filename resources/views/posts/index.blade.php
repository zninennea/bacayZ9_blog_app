<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('My Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                {{ __('Create New Post') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @forelse ($posts as $post)
                        <div class="p-4 mb-4 border-b border-gray-200">
                            <h3 class="font-bold text-lg">
                                <a href="{{ route('posts.show', $post) }}" class="hover:text-indigo-600">{{ $post->title }}</a>
                            </h3>
                            <p class="text-gray-600 text-sm">
                                {{ Str::limit($post->body, 150) }}
                            </p>
                            <div class="mt-4 flex justify-end space-x-2">
                                <a href="{{ route('posts.edit', $post) }}" class="text-sm text-gray-600 hover:text-gray-900">Edit</a>
                                <form method="POST" action="{{ route('posts.destroy', $post) }}" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="p-4">
                            <p class="text-gray-500">You have no posts yet. Click "Create New Post" to get started!</p>
                        </div>
                    @endforelse

                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>