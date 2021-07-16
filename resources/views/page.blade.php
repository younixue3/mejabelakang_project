@extends('template/public/master')
@section('title', 'Page')
@section('content')
<div class="pl-0 sm:pl-1/6 font-poppins">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        <div class="pb-10 h-rd120 relative">
            <img class="h-rd120 w-screen object-cover" src="{{ asset('Upload/image_content/'.$data->image_content) }}" alt="">
            <div class="absolute w-full bottom-0 bg-gradient-to-t z-10 px-5 md:px-20 py-20 from-blue-600 text-white">
                <h1 class="text-2xl md:text-5xl font-bold">{{$data->title}}</h1>
                <h4 class="pt-1 md:pt-5 text-xs md:text-base">
                    Tuesday, 6 July, 2021
                </h4>
            </div>
        </div>
        <div>
            <div class="bg-blue-600 text-white text-sm md:text-lg font-light px-5 py-8 md:px-40 md:py-10">
                {!!$data->sub_content!!}
            </div>
            <div class="px-5 py-8 md:px-40 md:py-10">
                <div class="text-xs md:text-sm">
                    {!!$data->content!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
