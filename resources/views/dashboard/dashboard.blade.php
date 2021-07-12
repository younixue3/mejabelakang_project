@extends('template/admin/master')
@section('title', 'Page')
@section('content')
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="flex">
            <div class="w-3/4 mr-5 grid grid-cols-2 grid-rows-3 gap-3 ">
                <div class="shadow-xl row-span-3 rounded-2xl h-full w-full flex w-1/2 relative">
                    <img class="rounded-2xl h-96 object-cover" src="{{ asset('img/beautiful-smart-asian-young-entrepreneur-business-woman-owner-sme-checking-product-stock-scan-qr-code-working-home.jpg') }}" alt="">
                    <div class="absolute bg-gradient-to-t bottom-0 z-10 px-5 h-full w-full from-gray-800 text-white rounded-2xl">
                        <div class="m-auto pt-1/6">
                            <h1 class="text-2xl font-bold truncate">Lorem ipsum dolor, sit</h1>
                            <div>
                                <i class="fas fa-eye"></i> 153
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow-xl rounded-3xl p-3 flex">
                    <img class="h-24 w-40 object-cover rounded-2xl" src="{{ asset('img/beautiful-asian-muslim-lady-casual-wear-working-using-laptop-modern-new-normal-office.jpg') }}" alt="">
                    <div class="ml-2 m-2">
                        <h1 class="text-base font-bold truncate">Lorem ipsum dolor, sit </h1>
                        <div>
                            <i class="fas fa-eye"></i> 153
                        </div>
                    </div>
                </div>
                <div class="shadow-xl rounded-3xl p-3 flex">
                    <img class="h-24 w-40 object-cover rounded-2xl" src="{{ asset('img/freelance-asian-woman-working-home-business-female-working-laptop-using-mobile-phone-drinking-coffee-sitting-table-garden-morning (1).jpg') }}" alt="">
                    <div class="ml-2 m-2">
                        <h1 class="text-base font-bold truncate">Lorem ipsum dolor, sit </h1>
                        <div>
                            <i class="fas fa-eye"></i> 153
                        </div>
                    </div>
                </div>
                <div class="shadow-xl rounded-3xl p-3 flex">
                    <img class="h-24 w-40 object-cover rounded-2xl" src="{{ asset('img/beautiful-smart-asian-young-entrepreneur-business-woman-owner-sme-checking-product-stock-scan-qr-code-working-home.jpg') }}" alt="">
                    <div class="ml-2 m-2">
                        <h1 class="text-base font-bold truncate">Lorem ipsum dolor, sit </h1>
                        <div>
                            <i class="fas fa-eye"></i> 153
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/4 ml-5 ">
                <div class="shadow-xl p-5 pt-8 rounded-2xl">
                    <h1 class="font-bold text-xl">Statistic</h1>
                    <div class="pt-8">
                        <span class="px-2 mx-2 border-b-4 border-blue-600">
                            <span class="text-2xl font-semibold">14</span>
                            <span class="font-semibold">News</span>
                        </span>
                        <span class="px-2 mx-2 border-b-4 border-green-600">
                            <span class="text-2xl font-semibold">14</span>
                            <span class="font-semibold">News</span>
                        </span>
                        <div class="bg-indigo-600 mt-5 p-5 text-white rounded-2xl">
                            <span class="text-2xl font-semibold">143</span>
                            <span class="font-semibold">Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
@endsection