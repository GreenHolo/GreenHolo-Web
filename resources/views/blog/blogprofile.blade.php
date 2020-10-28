@extends('layouts.bloghead')

@section('content')
    <div class="px-10 padrr py-5">
        <div class="flex items-center">
            <img class="w-20 h-20" src=" {{ asset('assets/profile.png') }} " alt="">
            <p class="mx-4 font-bold text-2xl text-gray-700">Joe Don</p>
        </div>
    </div>
@endsection