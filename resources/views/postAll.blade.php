<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Rekam Medis') }}
        </h2>
    </x-slot>

    <div class="bg-white h-screen flex items-center justify-center overflow-hidden shadow-sm sm:rounded-lg">
        <div class="container p-2 justify-center max-w-3xl bg-white border-b border-gray-200 rounded-lg">
            <h1>{{ $title }}</h1>
            <hr/>
            @foreach ($posts as $post)
                <article class="mb-5 border-bottom pb-4">
                    <h4>
                        <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                            {{ $post->patient->name }}
                        </a>
                    </h4>
                    <h6>By: <a href="#" class="text-decoration-none">{{ $post->patient->name }}</a> in <a href="/categories/{{ $post->doctor->slug }}" class="text-decoration-none">{{ $post->doctor->name }}</a></h6>
                </article>
            @endforeach
        </div>
    </div>

</x-app-layout>
