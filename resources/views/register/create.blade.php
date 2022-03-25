<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>

            <form method="POST" action="{{ route('register.store') }}" class="mt-10">
                @csrf
                <div class="pb-6">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" required class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username" required class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">

                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <input type="password" name="password" id="password" placeholder="Password" required class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pb-6">
                    <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm password" class="py-3 px-4 w-full rounded shadow font-thin focus:outline-none focus:shadow-lg focus:shadow-slate-200 duration-100 shadow-gray-100">
                </div>

                <div>
                    <input type="submit" value="Register" class="bg-blue-500 rounded-full text-xs font-semibold text-white uppercase py-3 px-4 w-full transition-colors duration-300 bg-blue-500 hover:bg-blue-600 lg:mt-0 rounded-full text-xs font-semibold text-white uppercase">
                </div>
            </form>
        </main>
    </section>
</x-layout>
