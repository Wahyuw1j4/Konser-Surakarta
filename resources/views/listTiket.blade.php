@extends('layouts.navbar')

@section('content')
<main>
  <div class="p-4 lg:px-[12rem]">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">Id Konser</th>
          <th scope="col" class="px-6 py-3">Username</th>
          <th scope="col" class="px-6 py-3">Jumlah tiket</th>
          <th scope="col" class="px-6 py-3">Total Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tikets as $tiket)
        <tr class="bg-white dark:bg-gray-800 text-center">
          <td>{{$tiket->id_konser}}</td>
          <td>{{$tiket->username}}</td>
          <td>{{$tiket->jumlah_tiket}}</td>
          <td>{{$tiket->total_harga}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
 
        
 
    
  </div>
</main>
@endsection