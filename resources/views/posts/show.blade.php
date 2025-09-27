<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4 text-sm text-gray-500">
                        Published on {{ $post->created_at->format('M d, Y') }}
                    </div>
                    
                    <div class="prose">
                        {{-- Using {!! !!} can be risky if body contains malicious JS. --}}
                        {{-- Use nl2br to respect line breaks safely. --}}
                        {!! nl2br(e($post->body)) !!}
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        <a href="{{ route('posts.index') }}" class="text-indigo-600 hover:text-indigo-900">
                            &larr; Back to Posts
                        </a>
                        
                        <a href="{{ route('posts.edit', $post) }}" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                            {{ __('Edit Post') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>