<ul>
    <li>
        <a 
            class="font-bold text-lg mb-4 block" 
            href="{{route('home')}}">
            Home
        </a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block" href="/Laravel/tweety/public/explore">
            Explore
        </a>
    </li>
    
    <li>
        <a 
            class="font-bold text-lg mb-4 block" 
            href="{{ route('profile', auth()->user() ) }}">
            Profile
        </a>
    </li>

    <li>
        <form action="{{ url('/logout') }}" 
                method="POST">
            @csrf
                
            <button class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-15 text-sm text-white h-10" 
                    style=" 
                    color:white;
                    border-radius: 50%
                    "
            >
                <h1 class="w-20">
                    Logout
                </h1>
            </button>
        </form>
    </li>
</ul>