<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="w-screen h-screen flex justify-center items-center bg-gray-500" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(100,0,0,0.2)), url(https://www.jeep.com/content/dam/fca-brands/na/jeep/en_us/2021/gladiator/gallery/exterior/Gladiator-Desktop.jpg.image.1440.jpg); background-size:100% 100%;">
      <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md ">
        <p class="mb-5 text-3xl uppercase text-red-600">LOGIN</p>
    @if (session('error'))
       <span class="text-red-500"> {{ session('error') }}</span>
    @endif
    @error('email')
       <span> {{ $message }} </span>
    @enderror
    <input type="text" wire:model="email" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none" placeholder="EMAIL">
    @error('password')
        {{ $message }}
    @enderror
    <input type="password" wire:model="password" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none" placeholder="PASSWORD">
    <button wire:click="submit" class="bg-red-500 py-1 px-2">Login</button>
    <a href="{{ url('register') }}" class="text-red-500 underline">Dont't have an Account</a>
    <a href="{{ url('/forgot-password') }}" class="text-red-500 underline">Forgot Password</a>
      </div>
    </div>
</div>
