@extends('template/public/master')
@section('title', 'Home')
@section('content')
{{-- {{dd($gallery2nd)}} --}}
<div class="flex">
    <img class="h-screen w-full object-cover transform rotate-180" src="{{ asset('img/earth_planet_islands_215593_3840x2160.jpg') }}" alt="">
    <div class="absolute top-32 px-10 flex">
        <img class="w-1/2" src="{{ asset('img/2020_Senate_election_map.png') }}" alt="">
        <p class="m-auto text-white font-medium">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa distinctio nam nulla exercitationem nobis? Provident recusandae quia repudiandae laudantium voluptatem necessitatibus reiciendis molestiae! Earum obcaecati modi quisquam adipisci doloremque suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. At ex corporis earum minima officia ad! Consectetur impedit ullam necessitatibus voluptates unde. Asperiores fuga obcaecati similique. Libero facere odit soluta sint.
        </p>
    </div>
</div>
<div class="pl-0 sm:pl-1/6 font-poppins">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        @if ($news == null)
        <div class="w-full md:w-3/4 p-5 text-center self-center text-4xl font-bold ">Data Kosong</div>
        @else
        <div class="lg:flex lg:flex-row-reverse p-5 -ml-5" id="news">
            <div class="px-2 pb-5 lg:px-8 lg:w-1/2 ">
                <a href="{{route('page.news', $news->id)}}">
                    <div class="bg-white rounded-xl shadow-xl">
                        <img class="h-80 w-full object-cover rounded-t-xl"
                            src="{{ asset('Upload/image_content/'.$news->image_content) }}" alt="">

                        <div class="p-2 pt-1 text-right overflow-hidden">
                            <span class="font-light text-xs">{{$news->created_at->format('d F , Y')}}</span>
                            <div class="px-3 text-left font-normal text-sm">
                                <h1 class="text-lg">{{$news->title}}</h1>
                                <div class="my-5 h-16 leading-normal truncate whitespace-normal">{!!$news->content!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-x-4 gap-y-10 md:w-1/2">
                @foreach ($news2nd as $item)
                <a href="{{route('page.news', $item->id)}}">
                    <div
                        class="cursor-pointer h-64 transform transition duration-500 ease-in-out scale-95 hover:scale-100 bg-white rounded-xl shadow-md hover:shadow-xl">
                        <img class="h-48 w-full object-cover rounded-t-xl"
                            src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                        <div class="p-2 pt-1 text-right">
                            <span class="font-light text-xs">{{$item->created_at->format('d F , Y')}}</span>
                            <div class="px-2 text-left font-normal text-sm overflow-hidden">
                                <h1 class="text-lg">{{$item->title}}</h1>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
        <div class="md:flex flex-row md:flex-row-reverse my-52" id="about">
            <div class="text-left md:w-1/2 px-0 md:px-5">
                <h1 class="text-6xl font-semibold">our value</h1>
                <p class="text-md font-light w-full">Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit.
                    Assumenda
                    cupiditate cum natus itaque placeat corrupti minima inventore</p>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-0 w-full md:w-1/2">
                <div>
                    <img class="h-full w-full object-cover"
                        src="{{ asset('img/beautiful-smart-asian-young-entrepreneur-business-woman-owner-sme-checking-product-stock-scan-qr-code-working-home.jpg') }}"
                        alt="">
                </div>
                <div class="col-start-1">
                    <img class="h-full w-full object-cover"
                        src="{{ asset('img/cozy-cafe-hotel-decorated-with-green-plants-flowers.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-full w-full object-cover"
                        src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
        <div class="block relative mt-10" id="gallery">
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
