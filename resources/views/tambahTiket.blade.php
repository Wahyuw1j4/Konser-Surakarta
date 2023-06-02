
@extends('layouts.navbar')

@section('content')
<main>
  <div class="p-4 lg:px-[12rem]">
    <p class="font-bold mb-6">Pesan Tiket</p>
    <form action="/konser/{{$konser->id}}/tiket" enctype="multipart/form-data" method="POST">
      @csrf
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
        <input type="name" name="username" id="name" class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="{{$auth->name}}" readonly>
      </div>
      <div class="mb-6">
        <label for="jml_tiket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah tiket</label>
        <input type="number" name="jumlah_tiket" id="jml_tiket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="1">
      </div>
      <div class="mb-6">
        <label for="tot_harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Harga</label>
        <input type="name" name="total_harga" id="tot_harga" class="bg-gray-50 border border-gray-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="Rp. {{$konser->harga}}" readonly>
      </div>
      <div class="mb-6">
        <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti Pembayaran</label>
        <input type="file" name="bukti_pembayaran" id="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
      </div>
      <div class="flex items-center mb-6">
        <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" required>
        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pastikan data terisi dengan benar, data tidak dapat dirubah kembali</label>
    </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesan Tiket</button>
    </form>
  </div>
</main>
@endsection

@push('scripts')

  <script>
    $(document).ready(function() {
      $('#jml_tiket').on('input', function() {
        var jml_tiket = $(this).val();
        if (jml_tiket < 1) {
          jml_tiket = 1;
        }
        let tot_harga = {{$konser->harga}} * jml_tiket;
        console.log(tot_harga)
        $('#tot_harga').val('Rp. ' + tot_harga);
      });
    });
  </script>
@endpush