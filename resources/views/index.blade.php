@extends('layouts.navbar')

@section('content')
<main>
  <div class="p-4 lg:px-[12rem]">
    @can('isAdmin')
    <a href="{{ route('tambah') }}"class="flex border-2 p-2 mb-2 w-[5rem] rounded-lg " >Tambah</a>
    @endcan
    <div class="grid grid-cols-2 gap-2">
    @foreach($konsers as $konser)
      <a href="{{ route('konser', ['id' => $konser['id']])}}">
        <div class="border-2 h-[250px] rounded-lg shadow-md">
          <div class="border-b-2 h-[170px] flex justify-center">
            <img class="h-20" src="{{asset('storage\images/' . $konser->poster)}}" alt="image description" style="width:15rem; height:170px">
        </div>
          <div class="px-2">
              <h3 class="text-1xl font-bold">{{$konser['nama']}}</h3>
              <p class="text-2md text-right  mt-2">Selebihnya...</p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
    
  </div>
</main>
@endsection