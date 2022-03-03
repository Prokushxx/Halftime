<div>
    {{-- In work, do what you enjoy. --}}
    <nav
    class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-red-500 shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0">
        @auth()

            <a href="{{ url('/') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Half Time</a>

        @endauth

    </div>
    <div>
        
        <a href="{{ url('register') }}"
            class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Register</a>
        <a href="{{ url('login') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Login</a>
        <a href="{{ url('booktype') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Contact Us
            </a>
        <a href="{{ url('login') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Admin
            </a>
        <a href="{{ url('logout') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Logout
            </a>
    </div>
</nav>
<div>
</div>

</div>
