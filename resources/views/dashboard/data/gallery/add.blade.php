@extends('template/admin/master')
@section('title', 'Gallery')
@section('content')
<header class="bg-white shadow">
  <div class="max-w-7xl px-12 py-8">
      <h1 class="text-3xl font-bold text-gray-900">
        Gallery
      </h1>
  </div>
</header>
<main>
    <form class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8" action="{{route('gallery.store')}}" method="POST">
        <div class="bg-white shadow-xl p-10 grid gap-y-3">
            <label>
                <div class="font-semibold">
                    Judul
                </div>
                <input class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl" type="text">
            </label>
            <label>
                <div class="font-semibold">
                    Isi Konten
                </div>
                <textarea id="tinymce" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor consectetur aspernatur consequuntur sequi vero, eius, incidunt provident non laudantium sed recusandae ratione placeat nesciunt repudiandae temporibus ipsam natus fuga?"></textarea>
            </label>
            <label>
                <div class="font-semibold">
                    Isi Konten
                </div>
                <input class="border-2 text-lg focus:outline-none rounded-xl" type="file">
            </label>
        </div>
    </form>
</main>
@endsection
