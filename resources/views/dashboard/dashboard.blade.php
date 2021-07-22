@extends('template/admin/master')
@section('title', 'Dashboard')
@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl px-12 py-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Dashboard
            {{-- {{dd($count_gallery)}} --}}
        </h1>
    </div>
</header>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="flex-none md:flex">
            @if ($news == null)
                <div class="w-full md:w-3/4 text-center self-center text-4xl font-bold ">Data Kosong</div>
            @else
            <div class="w-full md:w-3/4 mr-5 grid grid-cols-1 grid-rows-4 md:grid-cols-2 md:grid-rows-3 gap-3 truncate pb-10">
                <div class="bg-gray-100 shadow-xl row-span-3 rounded-2xl h-full w-full flex relative">
                    <img class="rounded-2xl h-96 object-cover" src="{{ asset('Upload/image_content/'.$news->image_content) }}" alt="">
                    <div class="absolute bg-gradient-to-t bottom-0 z-10 px-5 h-full w-full from-gray-800 text-white rounded-2xl">
                        <div class="m-auto pt-1/6">
                            <h1 class="text-2xl font-bold truncate">{{$news->title}}</h1>
                            <div>
                                <i class="fas fa-eye"></i> 153
                            </div>
                        </div>
                    </div>
                </div>
                
                @foreach ($news2nd as $item)
                    <div class="bg-gray-100 shadow-xl rounded-3xl p-3 flex">
                        <img class="w-40 object-cover rounded-2xl" src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                        <div class="ml-2 m-2">
                            <h1 class="text-base font-bold truncate">{{$item->title}}</h1>
                            <div>
                                <i class="fas fa-eye"></i> 153
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            <div class="w-full md:w-1/4 ml-0 md:ml-5">
                <div class="bg-gray-100 shadow-xl p-5 pt-8 rounded-2xl">
                    <h1 class="font-bold text-xl">Statistic</h1>
                    <div class="pt-8">
                        <span class="px-2 mx-2 border-b-4 border-blue-600">
                            <span class="text-2xl font-semibold">{{$count_news}}</span>
                            <span class="font-semibold">News</span>
                        </span>
                        <span class="px-2 mx-2 border-b-4 border-green-600">
                            @if ($count_gallery == null)
                                <span class="text-2xl font-semibold">Data kosong</span>   
                            @else 
                                <span class="text-2xl font-semibold">{{$count_gallery}}</span>
                            @endif
                            <span class="font-semibold">Gallery</span>
                        </span>
                        <div class="bg-indigo-600 mt-5 p-5 text-white rounded-2xl">
                            <span class="text-2xl font-semibold">{{$count_content}}</span>
                            <span class="font-semibold">Content</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </main>
@endsection