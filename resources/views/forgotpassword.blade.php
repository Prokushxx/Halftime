<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="w-screen h-screen flex justify-center items-center bg-gray-500"
        style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(100,0,0,0))">
        <div class="p-10 bg-gray-700 rounded flex justify-center items-center flex-col shadow-md ">
            <p class="mb-5 text-3xl uppercase text-red-600">Enter Email</p>
            <form action="{{ url('/forgot-password') }}" method="POST">
              @csrf
              @error('email')
                {{ $message }}
              @enderror

              @if (session('status'))
                  
              @endif
                <input type="email" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"
                    wire:model="email">
                <button type="submit" class="bg-blue-400 px-1 py-2">Send Link</button>
        </div>
    </div>
</body>
</html>
