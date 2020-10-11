@extends('layouts.navbar')

@section('content')
    <div class="px-10 py-5">
        <div class="-mx-1">
            <div class="w-full bg-white p-3 rounded-lg flex items-center mx-1">
                <a class="flex items-center m-3" href=""><img src="{{ asset('assets/saved.svg') }}" alt="" style="width: 35px;"> <span class="ml-1 text-black text-lg">Saved Jobs</span></a>
                <a class="flex items-center m-3" href=""><img src="{{ asset('assets/checked.svg') }}" alt="" style="width: 35px;"> <span class="ml-1 text-black text-lg">Applied Jobs</span></a>
                <a class="flex items-center m-3" href=""><img src="{{ asset('assets/not.svg') }}" alt="" style="width: 35px;"> <span class="ml-1 text-black text-lg">Jobs Alerts</span></a>
                <a class="text-center p-3 border-2 border-green-500 text-green-500 font-bold rounded-lg ml-auto mr-4" href="">Post a Job</a>
            </div>
            <div class="w-full bg-green-200 p-3 rounded-lg mx-1 my-5">
                <p class="text-center my-5 p-8 text-3xl">Search for your next job</p>
                <div class="my-5">
                    <form class="w-full max-w-3xl mx-auto">
                        <div class="flex -mx-1 mb-6">
                          <div class="w-full w-1/3 px-3 mb-6 md:mb-0">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="Search by title, skill, or company">
                          </div>
                          <div class="w-full w-1/3 px-3">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="City, state, or zip code">
                          </div>
                          <button class="px-1 w-1/3 text-white h-12 font-bold bg-green-500 rounded-lg">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full bg-white p-3 rounded-lg mx-1">
                <p class="text-center p-16 text-3xl text-gray-600">Search For Jobs Now</p>
            </div>
        </div>
    </div>
@endsection