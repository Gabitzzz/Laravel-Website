<x-app>
@if($users->isNotEmpty())
    @foreach ($users as $user)
        <div class="post-list">
            <a href="{{ route('profile',['user' => $user])}}">
                <img src=" {{ $user->avatar }} " 
                    alt=""
                    style="width: 100px">
                <h1>{{ $user->username }}</h1>
                </a>
        </div>
    @endforeach
@else 
    <div>
        <h2>No users found</h2>
    </div>
@endif
</x-app>