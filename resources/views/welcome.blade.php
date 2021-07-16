@extends('template/public/master')
@section('title', 'Home')
@section('content')
<div class="pl-0 sm:pl-1/6 font-poppins">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        @if ($gallery == null)
            <div class="w-full md:w-3/4 p-5 text-center self-center text-4xl font-bold ">Data Kosong</div>
        @else
        <div class="lg:flex lg:flex-row-reverse p-5 -ml-5" id="news">
            <div class="px-2 pb-5 lg:px-8 lg:w-1/2 ">
                <a href="{{route('page', $gallery->id)}}">
                    <div class="bg-white rounded-xl shadow-xl">
                        <img class="h-80 w-full object-cover rounded-t-xl"
                            src="{{ asset('Upload/image_content/'.$gallery->image_content) }}"
                            alt="">
                        
                        <div class="p-2 pt-1 text-right overflow-hidden">
                            <span class="font-light text-xs">{{$gallery->created_at->format('d F , Y')}}</span>
                            <div class="px-3 text-left font-normal text-sm">
                                <h1 class="text-lg">{{$gallery->title}}</h1>
                                <div class="my-5 h-16 leading-normal truncate whitespace-normal">{!!$gallery->content!!}</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-x-4 gap-y-10 md:w-1/2">
                @foreach ($gallery2nd as $item)
                <a href="{{route('page', $item->id)}}">
                    <div class="cursor-pointer h-64 transform transition duration-500 ease-in-out scale-95 hover:scale-100 bg-white rounded-xl shadow-md hover:shadow-xl">
                        <img class="h-48 w-full object-cover rounded-t-xl"
                            src="{{ asset('Upload/image_content/'.$item->image_content) }}"
                            alt="">
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
                <div><img class="h-96 w-screen object-cover cursor-pointer"
                        src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}"
                        alt=""></div>
                <div><img class="h-96 w-screen object-cover"
                        src="{{ asset('img/cozy-cafe-hotel-decorated-with-green-plants-flowers.jpg') }}" alt=""></div>
                <div><img class="h-96 w-screen object-cover"
                        src="{{ asset('img/cozy-cafe-hotel-decorated-with-green-plants-flowers.jpg') }}" alt=""></div>
            </div>
            <button
                class="prev_1st absolute top-0 h-full text-xl px-2  bg-transparent"><i
                    class="fas fa-arrow-left w-7 h-7 bg-gray-100 p-1 rounded-full"></i></button>
            <button
                class="next_1st absolute top-0 h-full text-xl right-0 px-2  bg-transparent"><i
                    class="fas fa-arrow-right w-7 h-7 bg-gray-100 p-1 rounded-full"></i></button>
        </div>
        <div class="block relative">
            <div class="carousel_2nd grid grid-cols-6 md:grid-cols-3 px-5 md:px-20 py-10">
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/beautiful-asian-muslim-lady-casual-wear-working-using-laptop-modern-new-normal-office.jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/beautiful-smart-asian-young-entrepreneur-business-woman-owner-sme-checking-product-stock-scan-qr-code-working-home.jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/cozy-cafe-hotel-decorated-with-green-plants-flowers.jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/scandinavian-vintage-wood-cabinet-with-chair-by-dark-blue-wall.jpg') }}"
                        alt="">
                </div>
                <div class="mx-1 cursor-pointer">
                    <img class="shadow-md h-32 w-32 object-cover"
                        src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}"
                        alt="">
                </div>
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

@endsection
