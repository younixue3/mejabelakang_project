@extends('template/master')
@section('title', 'Home')
@section('content')
<div class="pl-0 sm:pl-1/6 font-poppins">
    <div class="border-gray-100 border-l-0 sm:border-l-2">
        <div class="flex">
            <div
                class="absolute sm:relative z-10 text-7xl md:text-6xl lg:text-7xl font-bold object-cover text-justify mr-0 sm:mr-10 lg:mr-24 my-auto -ml-1.5">
                Beautiful
                <span class="bg-gray-700 text-white text-xl rounded-lg p-2 font-medium align-top">Pro</span>
                <div class="w-28 h-2 bg-gray-700 ml-5 mb-4"></div>
                <div class="text-xl sm:text-lg font-light w-rd150 sm:w-96 lg:w-rd120 xl:w-rd150 pl-10">Lorem ipsum dolor
                    sit
                    amet consectetur adipisicing elit. Placeat ut aperiam enim sit eveniet vitae, necessitatibus maiores
                    nam
                    harum veritatis repellendus vero reprehenderit minus neque distinctio nostrum. Iure, molestiae
                    animi.</div>
                <div class="mt-14">
                    <button
                        class="bg-gray-700 hover:bg-gray-500 text-white rounded-lg float-right p-3 text-xl font-medium">Get
                        Started</button>
                </div>
            </div>
            <div class="h-rd120 w-full pattern1 bg-cover bg-center bg-no-repeat text-left p-3 text-white">
                <h3 class="text-sm font-normal my-5">New</h3>
                <h1 class="text-3xl my-5">Feed Design</h1>
                <p class="text-sm w-96 my-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor dicta
                    voluptate
                    sit laborum perferendis voluptas distinctio est repudiandae error</p>
            </div>
        </div>
        <div class="grid grid-cols-2 my-52">
            <div class="grid grid-cols-2 grid-rows-2 gap-0">
                <div>
                    <div class="bg-blue-500 text-white p-5 text-left">
                        <LightningBoltIcon class="h-10 w-10" />
                        <div class="pt-3">
                            <span class="text-2xl font-semibold">Fast Service</span>
                            <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit
                                tenetur impedit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-start-1">
                    <div class="bg-pink-500 text-white p-5 text-left">
                        <LightningBoltIcon class="h-10 w-10" />
                        <div class="pt-3">
                            <span class="text-2xl font-semibold">Fast Service</span>
                            <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit
                                tenetur impedit
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-blue-400 text-white p-5 text-left">
                        <LightningBoltIcon class="h-10 w-10" />
                        <div class="pt-3">
                            <span class="text-2xl font-semibold">Fast Service</span>
                            <p class="font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit
                                tenetur impedit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left">
                <h1 class="text-6xl font-semibold">our value</h1>
                <p class="text-md font-light w-rd120">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Assumenda
                    cupiditate cum natus itaque placeat corrupti minima inventore</p>
            </div>
        </div>
        <div class="flex my-44">
            <div class="h-rd120 w-full pattern1 bg-cover bg-center bg-no-repeat text-left pt-10 pr-10 pb-10 text-white">
                <div class="bg-white shadow-lg text-gray-800 p-10">
                    <h1 class="text-3xl font-semibold">Statistik</h1>
                    <p class="text-sm w-96 my-2 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dolor
                        dicta voluptate sit laborum perferendis voluptas </p>
                    <div class="flex my-7">
                        <div class="border-b-4 border-yellow-600 text-2xl font-medium px-2 mx-4">
                            <div>213</div>
                            <div class="font-medium text-base text-gray-500">Client</div>
                        </div>
                        <div class="border-b-4 border-green-600 text-2xl font-medium px-2 mx-4">
                            <div>567</div>
                            <div class="font-medium text-base text-gray-500">Orders</div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="absolute sm:relative z-10 text-7xl md:text-6xl lg:text-7xl font-bold object-cover text-justify mx-0 sm:mx-10 lg:mx-24 my-auto">
                About Us
                <div class="w-56 h-2 bg-gray-700 ml-5 mb-4"></div>
                <div class="text-xl sm:text-lg font-light w-rd150 sm:w-96 lg:w-rd120 xl:w-rd150 pl-10">Lorem ipsum dolor
                    sit
                    amet consectetur adipisicing elit. Placeat ut aperiam enim sit eveniet vitae, necessitatibus maiores
                    nam
                    harum veritatis repellendus vero reprehenderit minus neque distinctio nostrum. Iure, molestiae
                    animi.</div>
            </div>
        </div>
    </div>
</div>
@endsection
