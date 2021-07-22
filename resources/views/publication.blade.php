@extends('template/public/master')
@section('title', 'Home')
@section('content')
<div class="flex">
    <img class="h-screen w-full object-cover transform rotate-180" src="{{ asset('img/earth_planet_islands_215593_3840x2160.jpg') }}" alt="">
    <div class="absolute top-32 px-10 md:flex overflow-hidden">
        <img class="w-full md:w-1/2" src="{{ asset('Upload/image_content/'.$hero->image_content) }}" alt="">
        <div class="m-auto text-white font-medium text-sm h-60 md:h-auto">
            <h1 class="text-6xl text-right mb-10 mr-6">About Us</h1>
            {!!$hero->desc!!}
        </div>
    </div>
</div>
<div class="pl-0 sm:pl-1/6 font-poppins pt-5">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        @if ($publication == null)
        <div class="w-full md:w-3/4 p-5 text-center self-center text-4xl font-bold ">Data Kosong</div>
        @else
        <div class="p-5 text-center" id="publication">
            <h1 class="text-4xl font-bold text-gray-800 my-10 -ml-6 text-left">About Us</h1>
            <div class="grid grid-row-6 gap-y-10 mb-10">
                @foreach ($publication as $item)
                <a href="{{route('page.publication', $item->id)}}">
                    <div
                        class="cursor-pointer transform transition duration-500 ease-in-out scale-95 hover:scale-100 bg-gray-100 rounded-xl shadow-md hover:shadow-xl flex">
                        <img class="h-72 w-full object-cover rounded-l-xl"
                            src="{{ asset('Upload/image_content/'.$item->image_content) }}" alt="">
                        <div class="p-2 pt-1 text-right">
                            <span class="font-light text-xs">{{$item->created_at->format('d F , Y')}}</span>
                            <div class="px-2 text-left font-normal text-sm overflow-hidden">
                                <h1 class="text-2xl">{{$item->title}}</h1>
                                <div class="text-sm text-gray-700 my-4 h-36">
                                    {!! $item->sub_content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            {{$publication->links()}}
        </div>
        @endif
    </div>
</div>
@endsection
