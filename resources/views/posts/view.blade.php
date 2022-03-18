<x-layout>
    <div class="mt-10">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="{{ App\Providers\RouteServiceProvider::HOME }}">Return to home</a>
    </div>
</x-layout>
