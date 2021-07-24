<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meja Belakang | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    @include('template/library')
</head>

<body class="font-poppins" id="home">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div id="appJs">
    <div class="fixed w-screen bg-transparent transition duration-300 z-50" id="navBar">
        <div>
            <div
                class="flex justify-between items-center md:justify-start px-5 py-5 sm:py-0 md:px-10 md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#" class="font-bold text-xl text-white">
                        <img class="w-20 md:w-32" src="{{ asset('img/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button onclick="openMenu()" type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="{{ Route::is('home') ? '#home' : '/' }}" id="nav1" class="text-base font-poppins font-medium py-5 {{ Route::is('home') ? 'border-b-4 border-white' : '' }} text-white hover:text-gray-200" onclick="navBar()">
                        Home
                    </a>
                    <a href="{{ Route::is('home') ? '#publication' : '/' }}" id="nav4" class="text-base font-poppins font-medium py-5 {{ Route::is('publication') || Route::is('page.publication') || Route::is('publication.index') ? 'border-b-4 border-white' : '' }} text-white hover:text-gray-200" onclick="navBar()">
                        About Us
                    </a>
                    <a href="{{ Route::is('home') ? '#news' : '/' }}" id="nav2" class="text-base font-poppins font-medium py-5 {{ Route::is('news') || Route::is('page.news') || Route::is('news.index') ? 'border-b-4 border-white' : '' }} text-white hover:text-gray-200" onclick="navBar()">
                        Publication
                    </a>
                    <a href="{{ Route::is('home') ? '#gallery' : '/' }}" id="nav3" class="text-base font-poppins font-medium py-5 {{ Route::is('gallery') || Route::is('page.gallery') ? 'border-b-4 border-white' : '' }} text-white hover:text-gray-200" onclick="navBar()">
                        Gallery
                    </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    @if (Auth::check())
                        <a href="{{url('dashboard')}}"
                            class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Dashboard
                        </a>
                    @else
                    @endif
                </div>
            </div>
        </div>

        <!--
        Mobile menu, show/hide based on mobile menu state.
    
        Entering: "duration-200 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <div id="menuBar" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right hidden md:hidden z-50">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="w-20 md:w-32" src="{{ asset('img/logo_black.png') }}" alt="">
                        </div>
                        <div class="-mr-2">
                            <button onclick="closeMenu()" type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="{{ Route::is('home') ? '#home' : '/' }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Home
                                </span>
                            </a>
                            <a href="{{ Route::is('home') ? '#publication' : '/' }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    About Us
                                </span>
                            </a>
                            <a href="{{ Route::is('home') ? '#news' : '/' }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Publication
                                </span>
                            </a>
                            <a href="{{ Route::is('home') ? '#gallery' : '/' }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Gallery
                                </span>
                            </a>
                            @if (Auth::check())
                            <a href="{{url('dashboard')}}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <span class="ml-3 text-base font-medium text-gray-900">
                                    Dashboard
                                </span>
                            </a>
                            @else
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>