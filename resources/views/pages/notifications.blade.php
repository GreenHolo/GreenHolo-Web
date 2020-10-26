@extends('layouts.navbar')

@section('content')
    <div class="px-10 py-5">
        <div class="flex -mx-1">
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <p class="py-4 text-center mt-3 font-bold text-xl text-black">Notifications</p>
                    <p class="py-3 text-center text-gray-500 text-sm mb-3">You have <span>3</span> new <br> notifications</p>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 mb-8 rounded-lg">
                    <p class="text-gray-600 m-2 font-medium text-lg">New</p>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <p class="max-w-xl text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                    <p class="text-xs mt-1 text-gray-500">2hrs ago</p>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <p class="max-w-xl text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                    <p class="text-xs mt-1 text-gray-500">2hrs ago</p>
                </div>
                <div class="bg-white p-3 -m-3 p-8 mb-8 flex rounded-lg">
                    <img class="w-16 h-16" src="{{ asset('assets/profile.png') }}" alt="">
                    <p class="max-w-xl text-left text-lg mx-8 text-gray-800">Bill Berry, your new connection, recently shared a seed you may be interested in.</p>
                    <p class="text-xs mt-1 text-gray-500">2hrs ago</p>
                </div>
            </div>
        </div>
    </div>
@endsection