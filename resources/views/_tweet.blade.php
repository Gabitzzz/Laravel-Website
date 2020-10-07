    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
        <div class="mr-2" style="flex-shrink:0;">
            <a href="{{ $tweet->user->path() }}">
                    <img src="{{ $tweet->user->avatar }}" 
                        style="height: 50px" 
                        class="rounded-full mr-2" 
                        alt=""
                    >    
            </a> 
        </div>

        <div>
            <h5 class="font-bold mb-4">
                <a href="{{ $tweet->user->path() }}">
                    {{ $tweet->user->name}}
                </a>
            </h5>

            <p class="text-sm mb-3">
                {{ $tweet->body }}
            </p>
            
            
            @if ($tweet->image != NULL)
                <div class="col-4">
                    <img src= {{ asset('storage/' . $tweet->image )}}>
                </div>
            @endif

          
            @auth
                <x-like-buttons :tweet="$tweet" />
            @endauth

        </div> 

        @if ($tweet->user_id == Auth::id())
            <ul>
                <li>
                    <a href="{{ route('tweet.delete', ['id' => $tweet->id]) }}">
                        <button type="button"  
                                class="bg-red-500 hover:bg-red-700 rounded-lg shadow px-10 text-sm text-white h-10"
                                style="color: white; border-radius: 50%;"
                        >
                            Delete</button>
                    </a> 
                </li>

                <li style="margin-top: 5%">
                    <a href="{{ route('tweet.edit', $tweet)}}">
                        <button type="button"
                                class="bg-green-500 hover:bg-green-700 rounded-lg shadow px-10 text-sm text-white h-10"
                                style="color: white; border-radius: 50%;">
                            Edit
                        </button>
                    </a>
                </li>
            </ul>
        @endif
    </div>


