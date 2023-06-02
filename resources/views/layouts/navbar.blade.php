<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header>
    <div class="flex justify-between items-center border-b-2 p-4 lg:px-[12rem]">
      <div class="">
        <h1 class="text-1xl font-bold">Surakarta Konser</h1>
      </div>
      <div class="">
        <div class="p-2 rounded-lg cursor-pointer" id="dropdown">{{Auth::user()->username}}</div>
        <div class="hidden border-2 bg-white shadow-lg absolute mt-2" id="dropdown-content">
          <a href="{{route("listTiket")}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Tiket</a>
          <a href="{{route("logout")}}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Logout</a>
        </div>
      </div>
    </div>
    
</header>
@yield('content')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    $('#dropdown').on('click', function() {
      $('#dropdown-content').toggleClass('hidden');
    });
  });

</script>

@stack('scripts')

</body>
</html>