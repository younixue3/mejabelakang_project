@extends('template/public/master')
@section('title', 'Home')
@section('content')
{{-- {{dd($gallery2nd)}} --}}
<div class="flex">
    <img class="h-screen w-full object-cover transform rotate-180" src="{{ asset('img/earth_planet_islands_215593_3840x2160.jpg') }}" alt="">
    <div class="absolute top-32 px-10 md:flex overflow-hidden">
        <img class="w-full md:w-1/2" src="{{ asset('Upload/image_content/'.$hero->image_content) }}" alt="">
        <div class="m-auto text-white font-medium text-sm h-60 md:h-auto">
            {!!$hero->desc!!}
            <div class="mt-5 float-right mr-10">
                <a class="text-white hover:text-gray-300 px-3 py-1 text-xl font-medium rounded-xl" href="{{route('publication.index')}}">More About Us</a>
            </div>
        </div>
    </div>
</div>
<div class="pl-0 sm:pl-1/6 font-poppins">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        @if ($publication == null)
        <div class="w-full md:w-3/4 p-5 text-center self-center text-4xl font-bold ">Data Kosong</div>
        @else
        <div class="p-5 text-center" id="publication">
            <h1 class="text-4xl font-bold text-gray-800 my-10 -ml-6 text-left">About</h1>
            <div class="grid grid-cols-3 gap-y-10 mb-10">
                @foreach ($publication as $item)
                <a href="{{route('page.publication', $item->id)}}">
                    <div
                        class="cursor-pointer transform transition duration-500 ease-in-out scale-95 hover:scale-100 bg-white rounded-xl shadow-md hover:shadow-xl flex">
                        <img class="h-48 w-60 object-cover rounded-l-xl"
                            src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                        <div class="p-2 pt-1 text-right">
                            <span class="font-light text-xs">{{$item->created_at->format('d F , Y')}}</span>
                            <div class="px-2 text-left font-normal text-sm h-36 overflow-hidden">
                                <h1 class="text-lg">{{$item->title}}</h1>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <a class="bg-gray-100 hover:bg-gray-200 font-medium px-5 py-2 rounded-xl" href="{{route('publication.index')}}">More About Us</a>
        </div>
        @endif
        @if ($news == null)
        <div class="w-full md:w-3/4 p-5 text-center self-center text-4xl font-bold ">Data Kosong</div>
        @else
        <div class="p-5 text-center" id="news">
            <h1 class="text-4xl font-bold text-gray-800 my-10 -ml-6 text-left">News</h1>
            <div class="grid grid-cols-4 gap-x-4 gap-y-10 mb-10">
                @foreach ($news as $item)
                <a href="{{route('page.news', $item->id)}}">
                    <div
                        class="cursor-pointer transform transition duration-500 ease-in-out scale-95 hover:scale-100 bg-white rounded-xl shadow-md hover:shadow-xl">
                        <img class="h-48 w-full object-cover rounded-t-xl"
                            src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                        <div class="p-2 pt-1 text-right">
                            <span class="font-light text-xs">{{$item->created_at->format('d F , Y')}}</span>
                            <div class="px-2 text-left font-normal text-sm overflow-hidden">
                                <h1 class="text-lg font-semibold">{{$item->title}}</h1>
                                <h1 class="text-sm h-20 my-4">{!!$item->content!!}</h1>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <a class="bg-gray-100 hover:bg-gray-200 font-medium px-5 py-2 rounded-xl" href="{{route('news.index')}}">More News</a>
        </div>
        @endif
        <div class="block relative mt-20" id="gallery">
            <div class="carousel_1st overflow-hidden">
                @foreach ($gallery as $item)
                <a href="{{route('page.gallery', $item->id)}}">
                    <div>
                        <img class="h-96 w-screen object-cover cursor-pointer" src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                    </div>
                </a>
                @endforeach
            </div>
            <button class="prev_1st absolute top-0 h-full text-xl px-2  bg-transparent"><i
                    class="fas fa-arrow-left w-7 h-7 bg-gray-100 p-1 rounded-full"></i></button>
            <button class="next_1st absolute top-0 h-full text-xl right-0 px-2  bg-transparent"><i
                    class="fas fa-arrow-right w-7 h-7 bg-gray-100 p-1 rounded-full"></i></button>
        </div>
        <div class="block relative">
            <div class="carousel_2nd grid grid-cols-6 md:grid-cols-3 px-5 md:px-20 py-10">
                @foreach ($gallery2nd as $item)
                    <div class="mx-1 cursor-pointer" @click="openImg" >
                        <img class="shadow-md h-32 w-32 object-cover"
                        data-target="{{route('page.gallery', $item->id)}}"
                        src="{{ asset('Upload/image_content/'.$item->image_content) }}"
                        alt="">
                    </div>
                @endforeach
                </div>
                <button
                    class="prev_2nd hidden md:block absolute mx-5 top-1/2 h-10 w-10 rounded-full text-xl text-gray-700 bg-gray-100 hover:bg-gray-200"><i
                    class="fas fa-arrow-left"></i></button>
                    <button
                    class="next_2nd hidden md:block absolute mx-5 top-1/2 h-10 w-10 rounded-full text-xl right-0 text-gray-700 bg-gray-100 hover:bg-gray-200"><i
                    class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</div>

<div id="modals_rd" class="hidden">
    <div class="fixed top-0 z-50 h-full w-full bg-black opacity-20" @click="closeImg">
    </div>
    <div class="z-50 fixed top-1/2 left-1/2 w-1/2 bg-white rounded-3xl text-center transform -translate-y-2/3 -translate-x-1/2">
        <a id="link_gallery" href="">
            <img class="shadow-md object-cover rounded-3xl" id="image_modal"
            src=""
            alt="">
        </a>
        <button @click="closeImg" class="absolute z-10 top-2 right-2 bg-gray-500 text-white opacity-80 hover:opacity-100 w-7 h-7 rounded-full"><i class="fas fa-times"></i></button>
    </div>
</div>
@endsection
