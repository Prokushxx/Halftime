<div>
    {{-- Stop trying to control. --}}
    <div class="h-screen bg-black w-screen"
        style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(100,0,0,0.2)), url(https://www.jeep.com/content/dam/fca-brands/na/jeep/en_us/2021/gladiator/gallery/exterior/Gladiator-Desktop.jpg.image.1440.jpg); background-size:100% 100%;">
        <h3 class=" text-yellow-600">WELCOME TO HALFTIME</h3>
        @auth
            <h1 class="text-white">{{ Auth()->user()->name }}</h1>
        @endauth
    </div>
    <div class="h-screen bg-blue-600">
       <div class="grid grid-rows-4 grid-flow-col h-3/4">
           <h2 class="bg-red-500 px-4 py-2">Some</h2>
           <h2 class="bg-red-500 px-4 py-2">Some</h2>
       </div>
    </div>
    <div class="bg-red-500 pb-16">
      <div class="bg-red-500 w-9/12 h-4/5 flex space-x-24 text-white justify-center flex-wrap m-0">
        <div class="flex flex-col mr-16">
          <h2 class="mb-8">About Us</h2> 
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
        </div>
        <div class="flex flex-col mr-16">
          <h2>Social Media</h2>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
        </div>
        <div class="flex flex-col mr-16">
          <h2>Contact Us</h2>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
          <a href="#" class="text-white mb-2 hover:text-black">LINK</a>
        </div>
      </div>
    </div>
</div>
