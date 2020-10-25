@extends('layouts.shophead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="bg-green-400 p-10 rounded-lg">
            <p class="text-white text-3xl font-bold max-w-lg text-center mx-auto">$20 OFF $100 PLUS, GET FREE NEXT-DAY DELIVERY</p>
            <p class="text-center text-white text-sm font-light my-4">With Code: 200WWW</p>
            <div class="mx-auto text-center">
                <button class="py-2 px-10 text-center rounded-full text-lg font-bold text-green-500 bg-white border-none">OK</button>
            </div>
        </div>
        <div class="flex items-center -mx-3 my-10">
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">NEW IN</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">CLOTHES</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">BODY CARE</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">HOUSEHOLD ITEMS</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">GIFTS</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">MOTHER & BABY</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">FOOD & DRINK</a>
            <a href="" class="py-2 px-5 bg-gray-200 text-gray-800 font-bold rounded-full mx-3 italic text-sm focus:bg-green-500 focus:text-white">OTHER GREEN ITEMS</a>
        </div>
        <div class="flex -mx-2 my-8">
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>

        </div>
        <div class="flex -mx-2 my-8">
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>
            <div class="w-1/5 mx-2">
                <img class="rounded-lg w-full" src=" {{ asset('assets/shopmockup.png') }} " alt="" style="max-width: 100%; max-height: 350px;">
                <div class="flex items-center">
                    <div class="my-4">
                        <p class="italic text-black font-bold text-lg">LA’ Donot Tee</p>
                        <p class="italic text-gray-600 font-bold text-lg">$12.99</p>
                    </div>
                    <button class="bg-white p-3 ml-auto shadow-lg rounded-full"><img src=" {{ asset('assets/addcart.svg') }} " alt=""></button>
                </div>
            </div>

        </div>
    </div>
@endsection