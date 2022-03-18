<x-layout>
    <div class="mt-10">
        <h1>{{ $post->title }}</h1>

        <p>
            By <a href="{{ route('authors.view', $post->author) }}">{{ $post->author->name }}</a> in <a href="{{ route('categories.view', $post->category) }}">{{ $post->category->name }}</a>
        </p>

        {!! $post->body !!}

        <p>
            <a href="{{ App\Providers\RouteServiceProvider::HOME }}">Return to home</a>
        </p>
    </div>
</x-layout>
