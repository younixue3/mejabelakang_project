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
    <form class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8" action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white shadow-xl p-10 grid gap-y-3">
            <label>
                <div class="font-semibold">
                    Judul
                </div>
                <input class="px-2.5 py-1 w-1/2 border-2 text-lg focus:outline-none rounded-xl" type="text" id="title" name="title">
            </label>
            <label>
                <div class="font-semibold">
                    Sub Content
                </div>
                <textarea id="tinymcesub" id="subcontent" name="sub_content" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor consectetur aspernatur consequuntur sequi vero, eius, incidunt provident non laudantium sed recusandae ratione placeat nesciunt repudiandae temporibus ipsam natus fuga?"></textarea>
            </label>
            <label>
                <div class="font-semibold">
                    Isi Konten
                </div>
                <textarea id="tinymce" id="content" name="content" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor consectetur aspernatur consequuntur sequi vero, eius, incidunt provident non laudantium sed recusandae ratione placeat nesciunt repudiandae temporibus ipsam natus fuga?"></textarea>
            </label>
            <label>
                <div class="font-semibold">
                    Gambar Konten
                </div>
                <div class="w-1/2 py-2 border-2 bg-white text-black hover:text-white hover:bg-blue-500 border-blue-500 rounded-xl cursor-pointer text-center">
                    <input class="" id="image_content" name="image_content" type="file">
                </div>
            </label>
            <div class="pt-5 justify-self-end">
                <input class="bg-blue-500 hover:bg-blue-600 text-white text-lg px-2 py-1 cursor-pointer rounded-xl" type="submit" value="Submit">
                <input class="bg-red-500 hover:bg-red-600 text-white text-lg px-2 py-1  cursor-pointer rounded-xl" type="button" value="Cancel">
            </div>
        </div>
    </form>
</main>
@endsection
