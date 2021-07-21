<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meja Belakang | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @include('template/library')
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: 'textarea#tinymce'
        });
      </script> --}}
</head>

<body class="font-poppins" id="home">
    <div id="appJs">
        {{-- <template> --}}
    <div class="flex w-full h-full">
        <div id="mobile-menu" class="h-full md:h-auto z-50 w-0 fixed md:w-80 duration-300 hover:w-80 bg-white rounded shadow-md md:block md:static overflow-hidden md:overflow-none">
            <div class="font-bold text-xl h-16 pl-5 pr-2 md:pr-0 overflow-hidden truncate flex">
                <img class="h-10 w-10 m-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                    alt="Workflow" /></span>
                <span class="ml-4 m-auto">
                    Meja Belakang
                </span>
                <button id="closeBar" type="button" class="md:hidden">
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div>
                <ul class="p-5 py-2">
                    <a href="{{url('dashboard')}}">
                        <li
                            class="px-2.5 py-2 my-2.5 {{ Route::is('dashboard') ? 'bg-gray-200' : 'bg-white hover:bg-gray-200' }} rounded-xl overflow-hidden truncate">
                            <i class="fas fa-desktop mr-3"></i><span class="" id="dashboardItem">Dashboard</span></li>
                    </a>
                    <a href="{{url('dashboard/hero')}}">
                        <li
                            class="px-2.5 py-2 my-2.5 {{ Route::is('hero') ? 'bg-gray-200' : 'bg-white hover:bg-gray-200' }} rounded-xl overflow-hidden truncate">
                            <i class="fas fa-mountain mr-3"></i><span id="galleryItem">Hero</span></li>
                    </a>
                    <a href="{{url('dashboard/publication')}}">
                        <li
                            class="px-2.5 py-2 my-2.5 {{ Route::is('publication') || Route::is('publication.add') || Route::is('publication.edit') ? 'bg-gray-200' : 'bg-white hover:bg-gray-200' }} rounded-xl overflow-hidden truncate">
                            <i class="fas fa-camera-retro mr-3"></i><span id="galleryItem">Publication</span></li>
                    </a>
                    <a href="{{url('dashboard/news')}}">
                        <li
                            class="px-2.5 py-2 my-2.5 {{ Route::is('news') || Route::is('news.add') || Route::is('news.edit') ? 'bg-gray-200' : 'bg-white hover:bg-gray-200' }} rounded-xl overflow-hidden truncate">
                            <i class="fas fa-newspaper mr-3"></i><span id="newsItem">News</span></li>
                    </a>
                    <a href="{{url('dashboard/gallery')}}">
                        <li
                            class="px-2.5 py-2 my-2.5 {{ Route::is('gallery') || Route::is('gallery.add') || Route::is('gallery.edit') ? 'bg-gray-200' : 'bg-white hover:bg-gray-200' }} rounded-xl overflow-hidden truncate">
                            <i class="fas fa-images mr-3"></i><span id="galleryItem">Gallery</span></li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="w-screen">
            <nav class="bg-gray-800">
                <div class="px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <button id="openBar" class="text-white"><svg class="block h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg></button>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button
                                    class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                    <span class="sr-only">View notifications</span>
                                    <!-- Heroicon name: outline/bell -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div class="ml-3 relative">
                                    <div>
                                        <button type="button"
                                            class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="menuProfileButton" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </button>
                                    </div>
                                    <div id="menuProfile" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-1">Settings</a>

                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                            tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                        </div>
                    </div>
                </div>
            </nav>