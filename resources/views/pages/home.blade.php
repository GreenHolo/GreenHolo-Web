@extends('layouts.navbar')

@section('content')
    <div class="px-10 py-5">
        <div class="flex -mx-1">
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg">
                    <div>
                        <img class="w-full rounded-lg" src="{{ asset('assets/banner.png') }}" alt="">
                        <img class="mx-auto rounded-full w-15 -m-12" src="{{ asset('assets/profile.png') }}" alt="">
                        <p class="mt-16 mb-6" style="text-align: center; font-weight:bold; font-size:20px;">Welcome, Greg!</p>
                    </div>
                    <div class="mt-10">
                        <a href=""><p class="m-3">Peope who viewed your profile <span class="ml-auto" style="font-weight: bold;">30</span></p></a>
                        <a href=""><p class="m-3">Connections <span style="font-weight: bold;" class="ml-auto">30</span></p></a>
                        <a href=""><p class="m-3" style="font-weight: bold;">Grow your network</p></a>
                    </div>
                    <div class="mt-12 rounded-lg text-center border-2 p-3 border-gray-400">
                        <a class="text-center" style="font-weight: bold;" href="/savedseeds">Saved Seeds</a> 
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-3/5 lg:w-3/5 xl:w-3/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="flex -m-3 bg-white rounded-lg">
                    <a href="" class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-gray-400" style="width: 500px">
                        <img src="{{ asset('assets/write.svg') }}" alt=""> <span class="py-3 font-bold ml-4 span">Write a Seed</span>
                    </a>
                    <a class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-gray-400" href=""><img src="{{ asset('assets/camera.svg') }}" alt=""></a>
                    <a class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-gray-400" href=""><img src="{{ asset('assets/video.svg') }}" alt=""></a>
                    <a class="m-3 flex border-2 py-2 px-4 rounded-lg text-center border-gray-400" href=""><img src="{{ asset('assets/document.svg') }}" alt=""></a>
                </div>
                <div class="flex -m-3 bg-white rounded-lg p-3 mt-8 items-center">
                    <p class="font-bold text-xl">Seeds</p>
                    <div class="flex relative items-center ml-auto">
                        <select class="block appearance-none w-auto bg-white rounded-lg border-2 border-gray-400 rounded-g hover:border-gray-500 px-4 py-2 pr-8 leading-tight focus:outline-none focus:shadow-outline" style="font-family: 'Poppins', sans-serif;">
                            <option>Top</option>
                            <option>Latest</option>
                            <option>New</option>
                        </select>
                        <div class="absolute right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                </div>
                <div class="-m-3 bg-white rounded-lg p-3 mt-8">
                    <div class="flex">
                        <img class="w-16 h-16 rounded-full" src="{{ asset('assets/profile.png') }}" alt="">
                        <div class="ml-3 mt-2">
                            <p class="font-bold">Martha Roberts</p>
                            <p class="text-xs text-gray-500">Marine Engineer</p>
                            <p class="text-xs text-gray-500">2hrs ago</p>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultricies enim sit dui metus ac suspendisse pretium. Aliquet vitae vitae nulla urna augue bibendum nulla curabitur. Enim tincidunt nibh blandit imperdiet sed condimentum  
                        </p>
                    </div>
                    <div class="mt-4">
                        <img class="w-full mx-auto rounded-lg" src="{{ asset('assets/post.png') }}" alt="">
                    </div>
                    <div class="flex items-center mt-4">
                        <p class="flex items-center"><img class="w-6 h-6" src="{{ asset('assets/shoots.svg') }}" alt=""> <span class="text-sm text-gray-500 ml-1">35</span></p>
                        <img class="mx-3" src="{{ asset('assets/dot.svg') }}" alt="">
                        <p class="text-sm text-gray-500">10 Comments</p>
                    </div>
                    <div class="flex items-center -mx-2 mt-4">
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/shoot.svg') }}" alt=""> <span class="ml-1 text-gray-600">Shoot</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/commentr.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed with comment</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/reseed.svg') }}" alt=""> <span class="ml-1 text-gray-600">Reseed</span></a>
                        <a class="flex items-center mx-2" href=""><img class="w-10" src="{{ asset('assets/share.svg') }}" alt=""> <span class="ml-1 text-gray-600">Seedmind</span></a>
                    </div>
                    <div class="flex items-center mt-8 mb-4 relative">
                        <img class="w-12 h-12" src="{{ asset('assets/profile.png') }}" alt="">
                        <input class="form-input w-full h-12 bg-gray-200 focus:bg-white rounded-full px-5 ml-2 outline-none relative" type="text" placeholder="Add a Comment...">
                        <button class="right-0 bg-green-500 hover:bg-green-500 text-white font-bold mx-3 py-2 px-4 rounded-full outline-none border-0">Submit</button>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-full md:w-1/4 lg:w-1/5 xl:w-1/5 mx-1 p-3 rounded-lg" style="height: auto;">
                <div class="bg-white p-3 -m-3 rounded-lg h-20"></div>
            </div>
          </div>
    </div>
@endsection