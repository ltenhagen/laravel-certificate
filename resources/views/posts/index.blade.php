<x-layout>
    <div class="mt-10">
        @foreach ($posts as $post)
            <h1><a href="{{ route('posts.view', $post) }}">{{ $post->title }}</a></h1>
            {{ $post->excerpt }}
        @endforeach
    </div>
</x-layout>
