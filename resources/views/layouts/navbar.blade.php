<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHolo</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body style="background: #F9f9f9">
    <nav class="bg-white w-full px-10 py-5">
        <div class="flex items-center">
            <img class="w-12" src="{{ asset('assets/logo-green.svg') }}" alt="GreenHolo">
            <input class="form-input w-full h-12 bg-gray-100 focus:bg-green-100 rounded-full px-5 ml-5 max-w-xs outline-none" placeholder="Search" type="search" name="" id="">
            <div class="flex ml-auto">
                <a class="mr-10" href="/home"><img class="m-3" src="{{ asset('assets/home.svg') }}" alt="home"></a>
                <a class="mr-10" href=""><img class="m-3" src="{{ asset('assets/people.svg') }}" alt="pple"></a>
                <a class="mr-10" href="/jobs"><img class="m-3" src="{{ asset('assets/jobs.svg') }}" alt="job"></a>
                <a class="mr-10" href=""><img class="m-3" src="{{ asset('assets/chat.svg') }}" alt="chat"></a>
                <a class="mr-10" href="/notifications"><img class="m-3" src="{{ asset('assets/notification.svg') }}" alt="not"></a>
                <a class="mr-10" href=""><img class="m-3 w-8 h-8" src="{{ asset('assets/profile.png') }}" alt="not"></a>
            </div>
        </div>
        

    </nav>
    @yield('content')
</body>
</html>