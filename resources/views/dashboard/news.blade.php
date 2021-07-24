@extends('template/admin/master')
@section('title', 'Gallery')
@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl px-12 py-8">
        <h1 class="text-3xl font-bold text-gray-900">
            News
        </h1>
    </div>
</header>
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <a href="{{route('news.add')}}">
            <button class="h-10 w-20 float-right bg-green-500 hover:bg-green-600 text-white text-center rounded-lg"><i
                    class="fas fa-plus mr-2"></i>Add</button>
        </a>
        <div class="grid grid-rows-5 gap-y-5 px-4 py-6 sm:px-0 mt-10">
            @foreach ($news as $item)
                <div class="bg-gray-100 shadow-xl rounded-3xl p-3 md:flex">
                    <img class="w-96 h-64 object-cover rounded-2xl"
                        src="{{ asset('Upload/image_content/'.$item->image_content) }}"
                        alt="">
                    <div class="ml-2 p-4 w-full">
                        <h1 class="text-base font-bold truncate">{{$item->title}}</h1>
                        <div class="pt-5">
                            <div class="h-24 leading-normal truncate whitespace-normal">
                                {!!$item->content!!}
                            </div>
                            <div class="pt-5">
                                <h2 class="font-semibold">{{$user->where('id','=', $item->user_id)->first()->name}}</h2>
                                <h2 class="font-light">{{$item->created_at->format('d F , Y')}}</h2>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-start py-3">
                        <a href="{{route('news.edit', $item->id)}}">
                            <button class="h-10 w-10 mx-1 px-3 bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg"><i
                                    class="fas fa-edit"></i></button>
                        </a>
                        <a href="#" @click="openModal" :data-target="{{$item->id}}">
                            <button :data-target="{{$item->id}}"
                                class="h-10 w-10 mx-1 px-3 bg-red-500 hover:bg-red-600 hover:bg-red-600 text-white rounded-lg"><i
                                :data-target="{{$item->id}}" class="fas fa-trash-alt"></i></button>
                        </a>
                    </div>
                </div>
            @endforeach
            {{$news->links()}}
        </div>
        <!-- /End replace -->
    </div>
</main>
@endsection
