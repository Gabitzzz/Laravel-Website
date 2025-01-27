<x-app>
    <div>
        <h1 class="text-2xl"
            style="text-align: center">
            Explore all users!
        </h1>
    </div>

    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}"
                class="flex items-center mb-5">
                <img 
                    src="{{ $user->avatar}}" 
                    alt="{{$user->username}}'s avatar"
                    width="60"
                    class="mr-4"
                >

                <div>
                    <h4 class="font-bold">
                        {{ $user->name }}
                    </h4>
                </div>
            </a>    
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>