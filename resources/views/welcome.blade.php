<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHolo</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="">
    <div class="mt-6 px-8 py-12 max-w-xl mx-auto">
        <div class="flex justify-center">
            <img src="{{ asset('assets/logo-green.svg') }}" alt="GreenHolo" />
        </div>
        <h3 class="mt-6 text-2xl font-semibold text-center text-gray-900">Welcome</h1>
        <h3 class="mt-6 text-lg text-center text-gray-900">Make the most out of your professional life</h3>
        <div class="mt-12 text-center">
            <a href="{{ url('/login') }}" class="px-6 py-4 w-full bg-green-500 hover:bg-green-400 active:bg-green-600 focus:outline-none focus:shadow-outline text-white text-lg rounded-lg font-semibold shadow-lg">Sign in</a>
            <a href="{{ url('/register') }}" class="px-6 py-4 w-full bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-600 focus:outline-none focus:shadow-outline text-white text-lg rounded-lg font-semibold shadow-lg">Sign Up</a>
        </div>
        
    </div>
    
</body>
</html>