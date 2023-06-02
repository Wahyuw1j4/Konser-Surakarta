@extends('layouts.navbar')

@section('content')
    <main>
        <div class="p-4 lg:px-[12rem]">
            <div class="min-h-[20rem] flex justify-center">
                <img src="{{ asset('storage\images/' . $konser->poster) }}" alt="">
            </div>
            <h2 class="font-bold py-2">{{ $konser->nama }}</h2>
            <p>Bertempat di {{ $konser->lokasi }}</p>
            <p class="py-2">Tanggal: {{ $konser->tanggal }}</p>
            @if (session('success'))
                <div class="flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session('success') }}</span> 
                    </div>
                </div>
            @endif
            <span class="flex gap-2">
                <span>
                    <a href="/konser/{{ $konser->id }}/tiket"
                        class="flex border-2 p-2 w-[8rem] h-auto rounded-1xl mt-4 justify-center">Pesan Tiket</a>
                      @can('isAdmin')
                    <a href="{{ route('show.konser', ['id' => $konser->id]) }}"
                        class="flex border-2 p-2  w-[8rem] rounded-1xl mt-4 justify-center">Edit Konser</a>
                        @endcan
                </span>
                @can('isAdmin')
                <span>
                    <form action="{{ route('delete.konser', $konser->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex border-2 p-2  w-[8rem] rounded-1xl mt-4 justify-center">Delete
                            Konser</button>
                    </form>
                </span>
                @endcan
            </span>
            <p class="py-3">
                {{ $konser->deskripsi }}
            </p>
        </div>
    </main>
@endsection
