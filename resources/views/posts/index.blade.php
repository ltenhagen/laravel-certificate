<x-layout>
    <div class="mt-10">
        @foreach ($posts as $post)
            <h1>
                <a href="{{ route('posts.view', $post) }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                By <a href="{{ route('authors.view', $post->author) }}">{{ $post->author->name }}</a> in <a href="{{ route('categories.view', $post->category) }}">{{ $post->category->name }}</a>
            </p>

            {{ $post->excerpt }}
        @endforeach
    </div>
</x-layout>
