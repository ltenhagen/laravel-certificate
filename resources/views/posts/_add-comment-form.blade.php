@auth()
    <x-panel>
        <form method="POST" action="{{ route('posts.comments.store', $post) }}">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" class="rounded-full"
                     alt="author avatar" width="40" height="40">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                                <textarea name="body" id="body" class="w-full text-sm focus:outline-none focus:ring"
                                          rows="5" placeholder="Quick, think of something to say!" required></textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <div class="font-semibold">
        <a class="hover:underline" href="{{ route('register.create') }}">Register</a> or <a
                class="hover:underline" href="{{ route('sessions.create') }}">log in</a> to leave a
        comment.
    </div>
@endauth
