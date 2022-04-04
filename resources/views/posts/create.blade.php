<x-layout>
    <main class="max-w-2xl mx-auto mt-10 lg:mt-20 space-y-6">
        <h1 class="font-semibold text-xl">
            Publish a new post
        </h1>
        <x-panel>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-6">
                    <label for="title">Title</label>
                    <input class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
                           id="title"
                           name="title"
                           placeholder="Title"
                           required
                           type="text"
                           value="{{ old('title') }}">

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <label for="excerpt">Excerpt</label>
                    <input class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
                           id="excerpt"
                           name="excerpt"
                           placeholder="Excerpt"
                           required
                           type="text"
                           value="{{ old('excerpt') }}">

                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <label for="thumbnail">Thumbnail</label>
                    <input class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
                           id="thumbnail"
                           name="thumbnail"
                           placeholder="Thumbnail"
                           required
                           type="file"
                           value="{{ old('thumbnail') }}">

                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <label for="body">Body</label>
                    <textarea
                            class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100"
                            id="body"
                            name="body"
                            placeholder="Post body here"
                            rows="5"
                            required>
                        {{ old('body') }}
                    </textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6 flex flex-col">
                    <label for="category_id">Category</label>

                    <select name="category_id" id="category_id">
                        @foreach(App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('body')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>
    </main>
</x-layout>