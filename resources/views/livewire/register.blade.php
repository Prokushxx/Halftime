<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="w-screen h-screen flex justify-center items-center bg-gray-500" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(100,0,0,0.2)), url(https://www.cnet.com/a/img/RglZPrqLTCxBvGd7YV1-I8D9yrs=/940x528/2020/12/07/6de8a73d-2efa-4c7b-afd8-c7ea1e8f1350/e450-promo.jpg); background-size:100% 100%;">
      <div class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-md ">
        <p class="mb-5 text-3xl uppercase text-red-600">SIGN UP</p>
        <div class="flex-row mt-15">
                @if (session('message'))
                    {{ session('message') }}
                    <br>
                @endif
                @error('fullname')
                    {{ $message }}
                    @enderror
                    <br>
                    <input type="text" wire:model="fullname" placeholder="fullname" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
    
                @error('email')
                    {{ $message }}
                @enderror <br>
                <input type="text" wire:model="email" placeholder="email" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
    
                @error('address')
                    {{ $message }}
                @enderror<br>
                <input type="text" placeholder="address" wire:model="address" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
    
                @error('mobile')
                    {{ $message }}
                @enderror<br>
                <input type="number" wire:model="mobile" placeholder="mobile" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
    
                @error('password')
                    {{ $message }}
                @enderror<br>
                <input type="password" wire:model="password" placeholder="password" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
    
                @error('confirmpassword')
                    {{ $message }}
                @enderror<br>
                <input type="password" wire:model="confirmpassword" placeholder="Confirm Password" class="mb-5 p-3 w-80 focus:border-red-700 rounded border-2 outline-none"><br>
                <button wire:click="submit" class="ml-10 justify-center bg-red-600 py-1 px-2 text-white">Register</button>
                 <button class="ml-10 justify-center  py-1 px-2 text-red-500 underline"><a href="{{ url('login') }}"> Already have an Account?</a></button>
            </div>
        </div>
    </div>

</div>

